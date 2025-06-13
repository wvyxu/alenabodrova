ymaps.ready(init);
    function init() {
      var mapCenter = [53.740195, 91.418061]; // Coordinates for Абакан, ул. Лермонтова, 21
      var myMap = new ymaps.Map("map", {
        center: mapCenter,
        zoom: 16,
        controls: ['zoomControl','fullscreenControl']
      });
      var myPlacemark = new ymaps.Placemark(mapCenter, {
        balloonContentHeader: "Студия красоты Алёны Бодровой",
        balloonContentBody: "г. Абакан, ул. Лермонтова, 21",
        hintContent: "Студия красоты Алёны Бодровой"
      }, {
        preset: "islands#redBeautyIcon"
      });
      myMap.geoObjects.add(myPlacemark);
      myMap.behaviors.enable('drag');
      myMap.behaviors.enable('scrollZoom');
    }