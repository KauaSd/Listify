const monthYearElement = document.getElementById('monthYear');
  const datesElement = document.getElementById('dates');
  const prevBtn = document.getElementById('prevBtn');
  const nextBtn = document.getElementById('nextBtn');
  const dateInput = document.getElementById('dateInput');

  let currentDate = new Date();

  const updateCalendar = () => {
    const currentYear = currentDate.getFullYear();
    const currentMonth = currentDate.getMonth();

    const firstDay = new Date(currentYear, currentMonth, 0);
    const lastDay = new Date(currentYear, currentMonth + 1, 0);
    const totalDays = lastDay.getDate();
    const firstDayIndex = firstDay.getDay();
    const lastDayIndex = lastDay.getDay();

    const monthYearString = currentDate.toLocaleString('default', { month: 'long', year: 'numeric' });
    monthYearElement.textContent = monthYearString.charAt(0).toUpperCase() + monthYearString.slice(1);

    let datesHTML = '';

    for (let i = firstDayIndex; i > 0; i--) {
      const prevDate = new Date(currentYear, currentMonth, 0 - i + 1);
      datesHTML += `<div class="date inactive">${prevDate.getDate()}</div>`;
    }

    for (let i = 1; i <= totalDays; i++) {
      const date = new Date(currentYear, currentMonth, i);
      const activeClass = date.toDateString() === new Date().toDateString() ? 'active' : '';
      datesHTML += `<div class="date ${activeClass}">${i}</div>`;
    }

    for (let i = 1; i <= 6 - lastDayIndex; i++) {
      const nextDate = new Date(currentYear, currentMonth + 1, i);
      datesHTML += `<div class="date inactive">${nextDate.getDate()}</div>`;
    }

    datesElement.innerHTML = datesHTML;
    document.querySelectorAll('.date').forEach(dateElement => {
  dateElement.addEventListener('click', () => {
    if (dateElement.classList.contains('inactive')) return;

    const selectedDay = parseInt(dateElement.textContent);
    const selectedMonth = currentDate.getMonth() + 1;
    const selectedYear = currentDate.getFullYear();

    const formattedMonth = String(selectedMonth).padStart(2, '0');
    const formattedDay = String(selectedDay).padStart(2, '0');

    dateInput.value = `${selectedYear}-${formattedMonth}-${formattedDay}`;

    document.querySelectorAll('.date').forEach(el => el.classList.remove('active'));
    dateElement.classList.add('active');
  });
});

    const formattedMonth = String(currentMonth + 1).padStart(2, '0');
    dateInput.value = `${currentYear}-${formattedMonth}-01`;
  }

  prevBtn.addEventListener('click', () => {
    currentDate.setMonth(currentDate.getMonth() - 1);
    updateCalendar();
  });

  nextBtn.addEventListener('click', () => {
    currentDate.setMonth(currentDate.getMonth() + 1);
    updateCalendar();
  });

  updateCalendar();
