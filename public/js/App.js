$(document).ready(function () {

});
function showAd(id){
    $.ajax({
        url: '?page=showAdOne',
        data:{id:id},
        dataType: 'json'
    })
        .done((res) => {
            console.log(res);
            var c=$("#ad");
            $("#ads").attr('style','display:none');
            c.empty();
            c.attr('style','display:');
            c.append(`<div class='col-12' style="border-style: solid; border-color:blueviolet;">
<div class="row">
<div class="col-3">Tytuł:</div>
<div class="col-9">${res.name}</div>
</div>
<div class="row">
<div class="col-3">Opis:</div>
<div class="col-9">${res.description}</div>
</div>
<div class="row">
<div class="col-3">Wystawiajacy:</div>
<div class="col-9">${res.username}</div>
</div>
<div class="row">
<div class="col-3">Miasto:</div>
<div class="col-9">${res.city}</div>
</div>
<div class="row">
<div class="col-3">Kategoria:</div>
<div class="col-9">${res.category}</div>
</div>
<div class="row">
<div class="col-3">Obrazek:</div>
<div class="col-9"><img src="uploads/${res.namefile}" width="300px;" height="300px;"></div>
</div>
</div>`);

        });
}