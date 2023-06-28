 // Отримайте посилання на кнопку та контейнер для фото
 const showPhotosButton = document.querySelector('#show-photos-btn');
 const photosContainer = document.querySelector('#photos-container');
 
 // Створіть масив з URL-адресами фотографій та назвами файлів
 const photoUrls = [
   {url: 'OIP44.jpg', name: 'Фото 1'},
   {url: 'OIP55.jpg', name: 'Фото 2'},
   {url: 'OIP88.jpg', name: 'Фото 3'},
   {url: 'OIP.jpg', name: 'Фото 4'},
   {url: 'OIP2.jpg', name: 'Фото 5'},
   {url: 'OIP3.jpg', name: 'Фото 6'},
   {url: 'OIP4.jpg', name: 'Фото 7'},
   {url: 'OIP5.jpg', name: 'Фото 8'},
   {url: 'OIP6.jpg', name: 'Фото 9'},
   {url: 'OIP7.jpg', name: 'Фото 10'},
   {url: 'OIP8.jpg', name: 'Фото 11'},
   {url: 'OIP9.jpg', name: 'Фото 12'},
   {url: 'OIP11.jpg', name: 'Фото 13'},
   {url: 'OIP22.jpg', name: 'Фото 14'},
 ];
 
 showPhotosButton.addEventListener('click', () => {
     photoUrls.forEach(photoUrl => {
       // Створюємо посилання на нову сторінку
       const link = document.createElement('a');
       link.href = `photo.html?url=${photoUrl}`;
   
       // Створюємо зображення
       const img = document.createElement('img');
       img.src = photoUrl;
       img.alt = 'Фото';
       link.appendChild(img);
   
       // Додаємо посилання з зображенням до контейнера
       photosContainer.appendChild(link);
     });
   });
 