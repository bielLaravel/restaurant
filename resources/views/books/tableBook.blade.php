<div id="tableBook" class="col-md-12">
    <table class="table">
    <thead>
        <tr>
        <th></th>
        <th>#</th>
        <th class="th-lg">Name</th>
        <th class="th-lg">Persons</th>
        <th class="th-lg">Email</th>
        <th class="th-lg">status</th>
        <th class="th-lg">Menu type</th>



        <th class="th-lg">Date</th>
        
        <th class="th-lg">State</th>
        <th class="th-lg">Delete / Edit</th>
        </tr>
    </thead>
    <tbody>
    @foreach($books as $book)
        <tr>
        <th scope="row"><input type="checkbox"></th>
        <th scope="row">{{$book->id}}</th>
        <td>{{$book->name}}</td>
        <td>{{$book->persons}}</td>
        <td>{{$book->email}}</td>
        <td>{{$book->status}}</td>
        <td>{{$book->menuType}}</td>

        <td>{{$book->date}} / {{$book->hour}}</td>
        <td><span id="{{$book->status}}" class="status  border  mt-1" style="display:inline-block; width: 16px; height:16px;border: 2px solid black; border-radius:100%;"></span> </td>
        <td><a id="{{$book->id}}" class="deleteBook btn btn-danger btn-sm" href="#">X</a>
        <a id="btnUpdateBook" value="putes" data-phone="{{$book->phone}}" class="ml-1 btn btn-warning btn-sm" data-mealType="{{$book->menuType}}" data-toggle="modal" data-target="#modalUpdateBook"  href="#" data-persons="{{$book->persons}}"  data-name="{{$book->name}}" data-hour="{{$book->hour}}" data-email="{{$book->email}}" data-date="{{$book->date}}" data-id="{{$book->id}}"> Edit</a></td>
        <td></td>

        </tr>
        @endforeach
    </tbody>
    </table>
</div>
