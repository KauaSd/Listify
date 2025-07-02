document.addEventListener('DOMContentLoaded', () => {
  const barraSemana = document.getElementById('barraSemana');
  const container = document.getElementById('containerTarefas');
  const btnPrev = document.getElementById('prev');
  const btnNext = document.getElementById('next');

  const diasPorPagina = 7;
  let dias = [];
  let startIndex = 0;

  function formatarDia(date) {
    const diasSemana = ['dom', 'seg', 'ter', 'qua', 'qui', 'sex', 'sáb'];
    const diaSemana = diasSemana[date.getDay()];
    const diaMes = String(date.getDate()).padStart(2, '0');
    const mes = String(date.getMonth() + 1).padStart(2, '0');
    return `${diaSemana},${diaMes}/${mes}`;
  }

 function initDias() {
  const hoje = new Date();

  // Domingo da semana atual
  const domingo = new Date(hoje);
  domingo.setDate(hoje.getDate() - hoje.getDay()); // 0 = domingo

  dias = [];

  // Gerar dias de 4 semanas (28 dias, centrados na semana atual)
  for (let i = -14; i <= 14; i++) {
    let d = new Date(domingo);
    d.setDate(domingo.getDate() + i);
    dias.push({ date: d, label: formatarDia(d) });
  }

  // Encontrar o índice do dia atual dentro da lista de dias
  const hojeStr = hoje.toISOString().slice(0, 10);
  startIndex = dias.findIndex(d => d.date.toISOString().slice(0, 10) === hojeStr) - (hoje.getDay());
}

  function renderDias() {
    barraSemana.innerHTML = '';
    for(let i = startIndex; i < startIndex + diasPorPagina; i++) {
      const diaObj = dias[i];
      const div = document.createElement('div');
      div.className = 'btnDia';
      div.textContent = diaObj.label;
      div.dataset.date = diaObj.date.toISOString().slice(0,10);
      div.style.display = 'inline-block';
      div.style.cursor = 'pointer';

      div.addEventListener('click', () => {
        document.querySelectorAll('.btnDia').forEach(b => b.classList.remove('active'));
        div.classList.add('active');
        carregarTarefas(div.dataset.date);
      });

      barraSemana.appendChild(div);
    }
    const hojeStr = new Date().toISOString().slice(0, 10);
    let encontrouHoje = false;

    barraSemana.querySelectorAll('.btnDia').forEach(btn => {
      if (btn.dataset.date === hojeStr) {
        btn.classList.add('active');
        carregarTarefas(btn.dataset.date);
        encontrouHoje = true;
      }
    });

    if (!encontrouHoje) {
      const primeiro = barraSemana.querySelector('.btnDia');
      if (primeiro) {
        primeiro.classList.add('active');
        carregarTarefas(primeiro.dataset.date);
      }
    }
  }

  function carregarTarefas(date) {
    fetch('pegarTarefas.php?date=' + date)
      .then(res => res.json())
      .then(tasks => {
        container.innerHTML = '';
        if(tasks.length === 0) {
          container.innerHTML = '<strong class="message">Sem tarefas para esse dia</strong>';
          return;
        }
        tasks.forEach(task => {
          const el = document.createElement('div');
          el.className = 'task';
          el.innerHTML = `
            <input type="checkbox">
            <strong class="task-name">${task.nm_tarefa}</strong><br>
            <span class="task-desc">${task.desc_tarefa}</span><br>
          `;
          container.appendChild(el);
        });
      });
  }

  btnPrev.addEventListener('click', () => {
    if (startIndex > 0) {
      startIndex -= 7;
      if (startIndex < 0) startIndex = 0;
      renderDias();
    } else {
      const primeiroDia = dias[0].date;
      let novosDias = [];
      for(let i = 7; i > 0; i--) {
        let d = new Date(primeiroDia);
        d.setDate(d.getDate() - i);
        novosDias.push({ date: d, label: formatarDia(d) });
      }
      dias = novosDias.concat(dias);
      startIndex += 7;
      startIndex -= 7;
      renderDias();
    }
  });

  btnNext.addEventListener('click', () => {
    if (startIndex + diasPorPagina < dias.length) {
      startIndex += 7;
      if (startIndex > dias.length - diasPorPagina) {
        startIndex = dias.length - diasPorPagina;
      }
      renderDias();
    } else {
      const ultimoDia = dias[dias.length -1].date;
      for(let i = 1; i <= 7; i++) {
        let d = new Date(ultimoDia);
        d.setDate(d.getDate() + i);
        dias.push({ date: d, label: formatarDia(d) });
      }
      startIndex += 7;
      renderDias();
    }
  });

  initDias();
  renderDias();
});
