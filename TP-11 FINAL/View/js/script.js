const ctx = document.getElementById('myChart');

  new Chart(ctx, {
    type: 'doughnut',
    data: {
      labels: ['Gregory', 'Thomas', 'Yellow', 'Green', 'Purple', 'Orange'],
      datasets: [{
        label: 'Dette en €',
        data: [12, 5, 3, 5, 2, 3],
        borderWidth: 1
      }]
    },
    options: {
      scales: {
        y: {
          beginAtZero: true
        }
      }
    }
  });