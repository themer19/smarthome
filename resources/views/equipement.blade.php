<section class="banner spad">
    <div class="container">
        <div class="row">
            <div class="col-lg-7 offset-lg-4">
                <div class="banner__item">
                    <div class="banner__item__pic">
                        <img src="img/app/thermo.jpg" alt="" style="width: 330px;height:330px">
                    </div>
                    <div class="banner__item__text">
                    <h3> <B>Thermostats intelligents</B></h3>  
                    <a href="#">Shop now</a>
                    </div>
                </div>
            </div>
            <div class="col-lg-5">
                <div class="banner__item banner__item--middle">
                    <div class="banner__item__pic">
                        <img src="img/app/camera.jpg" alt=""  >
                    </div>
                    <div class="banner__item__text">
                        <h3><b>Caméras de sécurité</b></h3>
                        <a href="#">Shop now</a>
                    </div>
                </div>
            </div>
            <div class="col-lg-7">
                <div class="banner__item banner__item--last">
                    <div class="banner__item__pic">
                        <img src="img/app/lock.jpg" alt="" style="width: 330px;height:330px">
                    </div>
                    <div class="banner__item__text">
                        <h2>Smart Locks</h2>
                        <a href="#">Shop now</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
 <!-- Product Section Begin -->
    <section class="product spad">
        <div class="container">
       @php 
            $eqs=DB::select('select * from  eqs'  )
        @endphp
            <div class="row">
                <div class="col-lg-12">
                    <ul class="filter__controls">
                        <h2> </h2>                    
                    </ul>
                </div>
            </div>
        
            <div class="row product__filter">
                @foreach ($eqs as $eq)
                <div class="col-lg-3 col-md-6 col-sm-6 col-md-6 col-sm-6 mix new-arrivals">
    
                    <div class="product__item">
                        <div class="product__item__pic set-bg" data-setbg="" style="height: 180px;width:180px">
                            <img src="{{asset('storage/eqph/'.$eq->image)}}" class="card-img-top" alt="..." style="width: 160px;height:160px">

                            <span class="label">New</span>
                            <ul class="product__hover">
                                <li><a href="#"><img src="img/icon/heart.png" alt=""></a></li>
                                <li><a href="#"><img src="img/icon/compare.png" alt=""> <span>Compare</span></a></li>
                                <li><a href="#"><img src="img/icon/search.png" alt=""></a></li>
                            </ul>
                        </div>
                        <div class="product__item__text">
                            <h6>{{$eq->name}}</h6>
                            <a href="#" class="add-cart">+ Add To Cart</a>
                            <div class="rating">
                                <i class="fa fa-star-o"></i>
                                <i class="fa fa-star-o"></i>
                                <i class="fa fa-star-o"></i>
                                <i class="fa fa-star-o"></i>
                                <i class="fa fa-star-o"></i>
                            </div>
                            <h5>{{$eq->prix}} </h5>
                           <!-- <div class="product__color__select">
                                <label for="pc-1">
                                    <input type="radio" id="pc-1">
                                </label>
                                <label class="active black" for="pc-2">
                                    <input type="radio" id="pc-2">
                                </label>
                                <label class="grey" for="pc-3">
                                    <input type="radio" id="pc-3">
                                </label>
                            </div>
                        -->
                        </div>
                    </div>
                </div>
                @endforeach
             </div>
         </div>
     </div>
</div>
 </div>
 </section>
