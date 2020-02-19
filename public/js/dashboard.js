$(document).ready(function () {
    hideAllTextHelp();
  
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
    function hideAllTextHelp() {
        //hide all elements book create
        $('#personHelp').hide();
        $('#helpName').hide();
        $('#helpPhone').hide(); 
        $('#helpEmail').hide();
        $('#helpHour').hide();
        //hide all elements book update
        $('#helpUpdateName').hide();
        $('#helpUpdateEmail').hide();
        $('#helpUpdateHour').hide();
        $('#helpUpdatePhone').hide();
        $('#helpUpdatePersons').hide();
        //public
        $('#personsPublic').hide();
        $('#phonePublic').hide();

            hideAllTextHelp();
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
            function hideAllTextHelp() {
                //hide all elements book create
                $('#personHelp').hide();
                $('#helpName').hide();
                $('#helpPhone').hide(); 
                $('#helpEmail').hide();
                $('#helpHour').hide();
                //hide all elements book update
                $('#helpUpdateName').hide();
                $('#helpUpdateEmail').hide();
                $('#helpUpdateHour').hide();
                $('#helpUpdatePhone').hide();
                $('#helpUpdatePersons').hide();
                //dish
                $('#dishNameModal').hide();

                //public
                $('#personsPublic').hide();
                $('#phonePublic').hide();
                $('#namePublic').hide();
                $('#emailPublic').hide();
                $('#publicHour').hide();

        
            }
            $(document).on('change', '.modal-body', function () {
                validateFormBook();
                validateUpdateBook();
            })
            $(document).on('change', '#formPublic', function () {
                validateFormBookPublic();
            })
            //VALIDATE THE DATA ON UPDATE BOOK
            validateFormBook = () => {
                let person = document.getElementById('bookPerson').value;
                let name = document.getElementById('bookName').value;
                let phone = document.getElementById('bookPhone').value;
                let email = document.getElementById('bookEmail').value;
                let hour = document.getElementById('bookHour').value;
            
                if (isNaN(person) || person < 1 || person > 15) {
                    $('#personHelp').show();
                    $('#bookPerson').addClass('is-invalid');
                } else {
                    $('#personHelp').hide();
                    $('#bookPerson').removeClass('is-invalid').addClass('is-valid');
                }
            
                if (name == null || name == "") {
                    $('#helpName').show();
                    $('#bookName').addClass('is-invalid');
                } else {
                    $('#helpName').hide();
                    $('#bookName').removeClass('is-invalid').addClass('is-valid');
                }
            
                let phoneNumber = /^\d{9}$/;
                if (!phone.match(phoneNumber)) {
                    $('#helpPhone').show();
                    $('#bookPhone').addClass('is-invalid');
                
                } else {
                     $('#helpPhone').hide();
                     $('#bookPhone').removeClass('is-invalid').addClass('is-valid');
                }
            
                let emailRex = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
                if (!email.match(emailRex)) {
                    $('#helpEmail').show();
                    $('#bookEmail').addClass('is-invalid');
                } else {
                    $('#helpEmail').hide();
                    $('#bookEmail').removeClass('is-invalid').addClass('is-valid');
                }
            
                let hourRex = /^([0-1]?[0-9]|2[0-4]):([0-5][0-9])(:[0-5][0-9])?$/;
                if (!hour.match(hourRex)) {
                    $('#helpHour').show();
                    $('#bookHour').addClass('is-invalid');
                } else {
                    $('#helpHour').hide();
                    $('#bookHour').removeClass('is-invalid').addClass('is-valid');
                }
            }
            //validate public form
            validateFormBookPublic = () => {
                let person = document.getElementById('persons').value;
                let name = document.getElementById('name').value;
                let phone = document.getElementById('phone').value;
                let email = document.getElementById('email').value;
                let hour = document.getElementById('time').value;
            
                if (isNaN(person) || person < 1 || person > 15) {
                    $('#personsPublic').show();
                    $('#persons').addClass('is-invalid');
                } else {
                    $('#personsPublic').hide();
                    $('#persons').removeClass('is-invalid').addClass('is-valid');
                }
            
                if (name == null || name == "") {
                    $('#publicName').show();
                    $('#name').addClass('is-invalid');
                } else {
                    $('#publicName').hide();
                    $('#name').removeClass('is-invalid').addClass('is-valid');
                }
            
                let phoneNumber = /^\d{9}$/;
                if (!phone.match(phoneNumber)) {
                    $('#phonePublic').show();
                    $('#phone').addClass('is-invalid');
                
                } else {
                     $('#phonePublic').hide();
                     $('#phone').removeClass('is-invalid').addClass('is-valid');
                }
            
                let emailRex = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
                if (!email.match(emailRex)) {
                    $('#emailPublic').show();
                    $('#email').addClass('is-invalid');
                } else {
                    $('#emailPublic').hide();
                    $('#email').removeClass('is-invalid').addClass('is-valid');
                }
            
                let hourRex = /^([0-1]?[0-9]|2[0-4]):([0-5][0-9])(:[0-5][0-9])?$/;
                if (!hour.match(hourRex)) {
                    $('#publicHour').show();
                    $('#s').addClass('is-invalid');
                } else {
                    $('#publicHour').hide();
                    $('#time').removeClass('is-invalid').addClass('is-valid');
                }
            }
            //VALIDATE THE DATA ON UPDATE BOOK
            validateUpdateBook = () => {
                let person = document.getElementById('modalPersons').value;
                let name = document.getElementById('modalName').value;
                let phone = document.getElementById('modalPhone').value;
                let email = document.getElementById('modalEmail').value;
                let hour = document.getElementById('modalHour').value;
            
            
                if (isNaN(person) || person < 1 || person > 15) {
                    $('#helpUpdatePersons').show();
                    $('#modalPersons').addClass('is-invalid');
                } else {
                    $('#helpUpdatePersons').hide();
                    $('#modalPersons').removeClass('is-invalid').addClass('is-valid');
                }
            
                if (name == null || name == "") {
                    $('#helpUpdateName').show();
                    $('#modalName').addClass('is-invalid');
                } else {
                    $('#helpUpdateName').hide();
                    $('#modalName').removeClass('is-invalid').addClass('is-valid');
                }
            
                let phoneNumber = /^\d{9}$/;
                if (!phone.match(phoneNumber)) {
                    $('#helpUpdatePhone').show();
                    $('#modalPhone').addClass('is-invalid');
                
                } else {
                     $('#helpUpdatePhone').hide();
                     $('#modalPhone').removeClass('is-invalid').addClass('is-valid');
                }
            
                let emailRex = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
                if (!email.match(emailRex)) {
                    $('#helpUpdateEmail').show();
                    $('#modalEmail').addClass('is-invalid');
                } else {
                    $('#helpUpdateEmail').hide();
                    $('#modalEmail').removeClass('is-invalid').addClass('is-valid');
                }
            
                let hourRex = /^([0-1]?[0-9]|2[0-4]):([0-5][0-9])(:[0-5][0-9])?$/;
                if (!hour.match(hourRex)) {
                    $('#helpUpdateHour').show();
                    $('#modalHour').addClass('is-invalid');
                } else {
                    $('#helpUpdateHour').hide();
                    $('#modalHour').removeClass('is-invalid').addClass('is-valid');
                }
            }
            
            //VALIDATE THE DISH ON CREATE
           
            //PUT THE VALUES OF THE BOOK IN THE INPUTS OF UPDATE MODAL
            $(document).on('click', '#btnUpdateBook', function () {
                
                $('#id').val($(this).data('id'));
                $('#modalName').val($(this).data('name'));
                $('#modalEmail').val($(this).data('email'));
                $('#modalDate').val($(this).data('date'));
                $('#modalHour').val($(this).data('hour'));
                $('#modalPhone').val($(this).data('phone'));
                $('#modalPersons').val($(this).data('persons'));
                $('#modalmealType').val($(this).data('mealType'));
        
                
                let id = $(this).data('id');
            });
           
            
            //Change the color depend on the validate status
            $('.status').map(function () {
                console.log(this.id)
                if (this.id == 1)$(this).addClass('bg-warning');
                else if (this.id == 2) $(this).addClass('bg-success');
                else $(this).addClass('bg-danger')
                
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
                console.log("aa")
                e.preventDefault();
        
                if (validateFormBook() == false) {
                    
                   console.error("ss")
                } else {
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
                                menuType: $('#menuType').val(),
                                updated_at: '23',
                            }                
                        },
                        success:function(data){
                            $('#tableBook').html(data);
                            $('#modalCreateBook').modal('hide');
                        }
                     });    
                }
                
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
                if (validateUpdateBook() == false) {
                    console.log("error")
                } else {
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
                }
               
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
                        $('#modalCreateDish').modal('hide');
        
                    }
                })
            })
            $(document).on('click', '#updateDish', function () {
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
        
            $('#tableBook').bind("DOMSubtreeModified",function(){
                $('.status').map(function () {
                    if (this.id == 1)$(this).addClass('bg-warning');
                    else if (this.id == 2) $(this).addClass('bg-success');
                    else $(this).addClass('bg-danger')
                    
                })
            });
        
            
        

    }
    $(document).on('change', '.modal-body', function () {
        validateFormBook();
        validateUpdateBook();
    })
    $(document).on('change', 'body', function () {
        validateFormBookPublic();
    })
    //VALIDATE THE DATA ON UPDATE BOOK
    validateFormBook = () => {
        let person = document.getElementById('bookPerson').value;
        let name = document.getElementById('bookName').value;
        let phone = document.getElementById('bookPhone').value;
        let email = document.getElementById('bookEmail').value;
        let hour = document.getElementById('bookHour').value;
    
        if (isNaN(person) || person < 1 || person > 15) {
            $('#personHelp').show();
            $('#bookPerson').addClass('is-invalid');
        } else {
            $('#personHelp').hide();
            $('#bookPerson').removeClass('is-invalid').addClass('is-valid');
        }
    
        if (name == null || name == "") {
            $('#helpName').show();
            $('#bookName').addClass('is-invalid');
        } else {
            $('#helpName').hide();
            $('#bookName').removeClass('is-invalid').addClass('is-valid');
        }
    
        let phoneNumber = /^\d{9}$/;
        if (!phone.match(phoneNumber)) {
            $('#helpPhone').show();
            $('#bookPhone').addClass('is-invalid');
        
        } else {
             $('#helpPhone').hide();
             $('#bookPhone').removeClass('is-invalid').addClass('is-valid');
        }
    
        let emailRex = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
        if (!email.match(emailRex)) {
            $('#helpEmail').show();
            $('#bookEmail').addClass('is-invalid');
        } else {
            $('#helpEmail').hide();
            $('#bookEmail').removeClass('is-invalid').addClass('is-valid');
        }
    
        let hourRex = /^([0-1]?[0-9]|2[0-4]):([0-5][0-9])(:[0-5][0-9])?$/;
        if (!hour.match(hourRex)) {
            $('#helpHour').show();
            $('#bookHour').addClass('is-invalid');
        } else {
            $('#helpHour').hide();
            $('#bookHour').removeClass('is-invalid').addClass('is-valid');
        }
    }
    //validate public form
    validateFormBookPublic = () => {
        let person = document.getElementById('persons').value;
        let name = document.getElementById('name').value;
        let phone = document.getElementById('phone').value;
        let email = document.getElementById('email').value;
        let hour = document.getElementById('time').value;
    
        if (isNaN(person) || person < 1 || person > 15) {
            $('#personsPublic').show();
            $('#persons').addClass('is-invalid');
        } else {
            $('#personsPublic').hide();
            $('#persons').removeClass('is-invalid').addClass('is-valid');
        }
    
        if (name == null || name == "") {
            $('#publicName').show();
            $('#name').addClass('is-invalid');
        } else {
            $('#publicName').hide();
            $('#name').removeClass('is-invalid').addClass('is-valid');
        }
    
        let phoneNumber = /^\d{9}$/;
        if (!phone.match(phoneNumber)) {
            $('#phonePublic').show();
            $('#phone').addClass('is-invalid');
        
        } else {
             $('#phonePublic').hide();
             $('#phone').removeClass('is-invalid').addClass('is-valid');
        }
    
        let emailRex = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
        if (!email.match(emailRex)) {
            $('#helpEmail').show();
            $('#bookEmail').addClass('is-invalid');
        } else {
            $('#helpEmail').hide();
            $('#bookEmail').removeClass('is-invalid').addClass('is-valid');
        }
    
        let hourRex = /^([0-1]?[0-9]|2[0-4]):([0-5][0-9])(:[0-5][0-9])?$/;
        if (!hour.match(hourRex)) {
            $('#helpHour').show();
            $('#bookHour').addClass('is-invalid');
        } else {
            $('#helpHour').hide();
            $('#bookHour').removeClass('is-invalid').addClass('is-valid');
        }
    }
    //VALIDATE THE DATA ON UPDATE BOOK
    validateUpdateBook = () => {
        let person = document.getElementById('modalPersons').value;
        let name = document.getElementById('modalName').value;
        let phone = document.getElementById('modalPhone').value;
        let email = document.getElementById('modalEmail').value;
        let hour = document.getElementById('modalHour').value;
    
    
        if (isNaN(person) || person < 1 || person > 15) {
            $('#helpUpdatePersons').show();
            $('#modalPersons').addClass('is-invalid');
        } else {
            $('#helpUpdatePersons').hide();
            $('#modalPersons').removeClass('is-invalid').addClass('is-valid');
        }
    
        if (name == null || name == "") {
            $('#helpUpdateName').show();
            $('#modalName').addClass('is-invalid');
        } else {
            $('#helpUpdateName').hide();
            $('#modalName').removeClass('is-invalid').addClass('is-valid');
        }
    
        let phoneNumber = /^\d{9}$/;
        if (!phone.match(phoneNumber)) {
            $('#helpUpdatePhone').show();
            $('#modalPhone').addClass('is-invalid');
        
        } else {
             $('#helpUpdatePhone').hide();
             $('#modalPhone').removeClass('is-invalid').addClass('is-valid');
        }
    
        let emailRex = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
        if (!email.match(emailRex)) {
            $('#helpUpdateEmail').show();
            $('#modalEmail').addClass('is-invalid');
        } else {
            $('#helpUpdateEmail').hide();
            $('#modalEmail').removeClass('is-invalid').addClass('is-valid');
        }
    
        let hourRex = /^([0-1]?[0-9]|2[0-4]):([0-5][0-9])(:[0-5][0-9])?$/;
        if (!hour.match(hourRex)) {
            $('#helpUpdateHour').show();
            $('#modalHour').addClass('is-invalid');
        } else {
            $('#helpUpdateHour').hide();
            $('#modalHour').removeClass('is-invalid').addClass('is-valid');
        }
    }
    
    //VALIDATE THE DISH ON CREATE
    /*validateFormDish = () => {
        let name = document.getElementById('dishName').value;
        let price = document.getElementById('dishPrice').value;
 
    
        if (isNaN(price) || price  <=0 ){
            $('#dishHelpPrice').show();
            $('#dishPrice').addClass('is-invalid');
        } else {
            $('#dishHelpPrice').hide();
            $('#dishPrice').removeClass('is-invalid').addClass('is-valid');
        }
    
        if (name == null || name == "") {
            $('#dishHelpName').show();
            $('#dishName').addClass('is-invalid');
        } else {
            $('#dishHelpName').hide();
            $('#dishName').removeClass('is-invalid').addClass('is-valid');
        }
    
    
    
    }*/
    //PUT THE VALUES OF THE BOOK IN THE INPUTS OF UPDATE MODAL
    $(document).on('click', '#btnUpdateBook', function () {
        
        $('#id').val($(this).data('id'));
        $('#modalName').val($(this).data('name'));
        $('#modalEmail').val($(this).data('email'));
        $('#modalDate').val($(this).data('date'));
        $('#modalHour').val($(this).data('hour'));
        $('#modalPhone').val($(this).data('phone'));
        $('#modalPersons').val($(this).data('persons'));
        $('#modalmealType').val($(this).data('mealType'));

        
        let id = $(this).data('id');
    });
   
    
    //Change the color depend on the validate status
    $('.status').map(function () {
        console.log(this.id)
        if (this.id == 1)$(this).addClass('bg-warning');
        else if (this.id == 2) $(this).addClass('bg-success');
        else $(this).addClass('bg-danger')
        
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
        console.log("aa")
        e.preventDefault();

        if (validateFormBook() == false) {
            
           console.error("ss")
        } else {
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
                        menuType: $('#menuType').val(),
                        updated_at: '23',
                    }                
                },
                success:function(data){
                    $('#tableBook').html(data);
                    $('#modalCreateBook').modal('hide');
                }
             });    
        }
        
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
        if (validateUpdateBook() == false) {
            console.log("error")
        } else {
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
        }
       
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
                $('#modalCreateDish').modal('hide');

            }
        })
    })
    $(document).on('click', '#updateDish', function () {
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

    $('#tableBook').bind("DOMSubtreeModified",function(){
        $('.status').map(function () {
            if (this.id == 1)$(this).addClass('bg-warning');
            else if (this.id == 2) $(this).addClass('bg-success');
            else $(this).addClass('bg-danger')
            
        })
    });

    

});