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
    for(let i = -14; i <= 14; i++) {
      let d = new Date(hoje);
      d.setDate(hoje.getDate() + i);
      dias.push({ date: d, label: formatarDia(d) });
    }
    startIndex = 14;
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
    const primeiroBotao = barraSemana.querySelector('.btnDia');
    if(primeiroBotao){
      primeiroBotao.classList.add('active');
      carregarTarefas(primeiroBotao.dataset.date);
    }
  }

  function carregarTarefas(date) {
    fetch('pegarTarefas.php?date=' + date)
      .then(res => res.json())
      .then(tasks => {
        container.innerHTML = '';
        if(tasks.length === 0) {
          container.innerHTML = '<p>Sem tarefas para esse dia</p>';
          return;
        }
        tasks.forEach(task => {
          const el = document.createElement('div');
          el.className = 'task';
          el.textContent = task.nm_tarefa;
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
