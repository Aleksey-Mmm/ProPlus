
   $('.my_button').on('click', function(){
       var oid = $(this).attr('data-oid');
       var url = 'org';
       if ((window.location.search).indexOf('?')>-1) {
           //если есть запрос в урл, то добавляем к нему
           //в основном чтобы возвращаться на ту же страницу в пагинации
           url = url + window.location.search + '&oid=' +oid;
       } else {
           url = url + '?oid=' +oid;
       }
       $('#myModal1').find('.modal-body').load(url);
       //console.log(window.location.search);
   });