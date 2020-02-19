<section id="menu-list" class="section-padding">
        <div class="container">
            <div class="row">
                <div class="col-md-12 text-center marb-35">
                    <h1 class="header-h">Menu List</h1>
                    <p class="header-p">Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam
                        nonummy
                        <br>nibh euismod tincidunt ut laoreet dolore magna aliquam. </p>
                </div>

                <div class="col-md-12  text-center" id="menu-flters">
                    <ul>
                        @foreach($categories as $categorie)
                        <li><a class="filter  categories" id="{{$categorie->dish_categorie}}">{{$categorie->dish_categorie}}</a></li>
                        @endforeach
                    </ul>
                </div>
                @include('publicMenus',['dishes'=>$dishes])          

            </div>
        </div>
    </section>