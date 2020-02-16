$(document).ready(function () {
    $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
    });
    //side bar
    $(document).on('click', '#sideBar', function () {
        $('#sidebar-wrapper').toggle();
    })
    $(document).on('click', '#alertCrud', function () {
        $('alert').hide();
    })
    //PUT THE VALUES OF THE BOOK IN THE INPUTS OF UPDATE MODAL
    $(document).on('click', '#btnUpdateBook', function () {
        
        $('#id').val($(this).data('id'));
        $('#modalName').val($(this).data('name'));
        $('#modalEmail').val($(this).data('email'));
        $('#modalDate').val($(this).data('date'));
        $('#modalHour').val($(this).data('hour'));
        $('#modalPhone').val($(this).data('phone'));
        $('#modalPersons').val($(this).data('persons'));
        
        let id = $(this).data('id');
    });
   
    
    //Change the color depend on the validate status
    $('.status').map(function () {
        if (this.id == 1)$(this).addClass('bg-warning');
        else if (this.id == 2) $(this).addClass('bg-success');
        else $(this).addClass('bg-danger')
        
    })
    //create the dish
    $(document).on('click', '#createDish', function () {
        let dishName = $('#dishName').val();
        let dishSuplement = $('#dishSuplement').val();
        let divToAppend = $('#dishType').val();

        if (dishSuplement !== "") {
            let plantilla = `
                <div class="textDish mt-2 border border-dark" > <span class="">${dishName}</span>
                <span class="">suplement( ${dishSuplement}€)</span><i class="deleteDish btn ml-3 text-danger fa fa-times-circle" aria-hidden="true"></i></div >
            `; 
            $(divToAppend).append(plantilla);
            $('').empty();
        } 
    })
    //Remove the dish from the menu
    $(document).on('click', '.deleteDish', function (){
        $(this).parent().remove();
    })
    //AJAX DELETE ALL SELECTED
    $(document).on('click', '#deleteAll', function () {
        e.preventDefault();
        let idObject = $(this).attr('id');
        $
        $.ajax({
            type: 'delete',
            url: `books/${idObject}`,
            data: {
                obj: {
                    id: idObject,
                }
            },
            success: function (data) {
                $('#tableBook').html(data);
            }
        });



    })
    //AJAX CREATE BOOK
    $(document).on('click', '#createBook', function (e) {
        e.preventDefault();
        $.ajax({
            type:'get',
            url:'books/create',
            data: {
                obj: {
                    name: $('#bookName').val(),
                    date: $('#bookDate').val(),
                    phone: $('#bookPhone').val(),
                    email: $('#bookEmail').val(),
                    hour: $('#bookHour').val(),
                    persons: $('#bookPerson').val(),
                    status: $('#bookState').val(),
                    updated_at: '23',
                }                
            },
            success:function(data){
                $('#tableBook').html(data);
                $('#modalCreateBook').modal('hide');
            }
         });
    })
    //AJAX DELETE BOOK
    $(document).on('click', '.deleteBook', function (e) {
        e.preventDefault();
        let idObject = $(this).attr('id');
        $.ajax({
            type: 'delete',
            url: `books/${idObject}`,
            data: {
                obj: {
                    id: idObject,
                }
            },
            success: function (data) {
                $('#tableBook').html(data);
            }
        });

    })
    //AJAX EDIT BOOK
    $(document).on('click', '#saveBook', function (e) {
        e.preventDefault();
        let idObject = $('#id').val();
        $.ajax({
            type: 'put',
            url: `books/${idObject}`,
            data: {
                obj: {
                    name: $('#modalName').val(),
                    date: $('#modalDate').val(),
                    phone: $('#modalPhone').val(),
                    email: $('#modalEmail').val(),
                    hour: $('#modalHour').val(),
                    persons: $('#modalPerson').val(),
                    status: $('#modalState').val(), 
                }
            },
            success: function (data) {
                $('#tableBook').html(data);
                $('#modalUpdateBook').modal('hide');
            }
        })
    })
   // AJAX CREATE DISH
    $(document).on('click', '#createDish', function (e) {
        e.preventDefault();
        $.ajax({
            type: 'get',
            url: `dishes/create`,
            data: {
                obj: {
                    dish_name: $('#dishName').val(),
                    description: $('#dishDescription').val(),
                    categorie: $('#dishCategorie').val(),
                    active: $('#dishState').val(),
                    preu: $('#dishPrice').val(),
                }
            },
            success: function (data) {
                $('#tableDish').html(data);
                $('#modalUpdateBook').modal('hide');
            }
        })
    })
    $(document).on('click', '.deleteDishes', function (e) {
        e.preventDefault();
        let objId = $(this).attr('id');
        $.ajax({
            type: 'delete',
            url: `dishes/${objId}`,
            data: {
                obj: {
                    id: objId,
                }
            },
            success: function (data) {
                $('#tableDish').html(data);

            }
        })
    })
    $(document).on('click', '#btnUpdateDish', function (e) {
        e.preventDefault();
        let objId = $(this).attr('id');
        $.ajax({
            type: 'put',
            url: `dish/${objId}`,
            data: {
                obj: {
                    dish_name: $('#dishName').val(),
                    description: $('#dishDescription').val(),
                    categorie: $('#dishCategorie').val(),
                    active: $('#dishState').val(),
                    preu: $('#dishPrice').val(),
                }
            },
            success: function (data) {
                $('#tableDish').html(data);
            }
        })
    })
    $(document).on('click', '#btnUpdateDish', function () {
        $('#idDish').val($(this).data('id')),
        $('#updateDishName').val($(this).data('name')),
        $('#updateDishPreu').val($(this).data('preu')),
        $('#updateDishDescription').val($(this).data('description')),
        $('#updateDishState').val($(this).data('active')),
        $('#updateDishCategorie').val($(this).data('categorie'))

    })

    //Get the current dishes on click public web
    $(document).on('click', '.categories', function (e) {
        e.preventDefault();
        $('.categories').removeClass('active');

        let objId = $(this).attr('id');
        $(this).addClass('active');
        $.ajax({
            type: 'get',
            url: `getDishes/${objId}`,
            data: {
                obj: {
                    id: objId,
                }
            },
            success: function (data) {
                $('#menu-wrapper').html(data);
            }
        })
    })


});