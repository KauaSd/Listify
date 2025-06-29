
document.addEventListener('DOMContentLoaded', () => {
  const botoes = document.querySelectorAll('.btnDia');

  botoes.forEach(btn => {
    btn.addEventListener('click', () => {
      botoes.forEach(b => b.classList.remove('active'));
      btn.classList.add('active');

      const date = btn.dataset.date;

      fetch('pegarTarefas.php?date=' + date)
        .then(res => res.json())
        .then(tasks => {
          const container = document.getElementById('containerTarefas');
          container.innerHTML = '';

          if (tasks.length === 0) {
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
    });
  });

  // Clica automaticamente no botão do dia atual
  const btnAtivo = document.querySelector('.btnDia.active');
  if (btnAtivo) {
    btnAtivo.click();
  }
});
document.addEventListener('DOMContentLoaded', () => {
  const botoes = document.querySelectorAll('.btnDia');

  botoes.forEach(btn => {
    btn.addEventListener('click', () => {
      botoes.forEach(b => b.classList.remove('active'));
      btn.classList.add('active');

      const date = btn.dataset.date;

      fetch('pegarTarefas.php?date=' + date)
        .then(res => res.json())
        .then(tasks => {
          const container = document.getElementById('containerTarefas');
          container.innerHTML = '';

          if (tasks.length === 0) {
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
    });
  });

  // Clica automaticamente no botão do dia atual
  const btnAtivo = document.querySelector('.btnDia.active');
  if (btnAtivo) {
    btnAtivo.click();
  }
});
