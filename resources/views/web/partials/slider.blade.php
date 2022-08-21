
<section id="slider" class="slider-element swiper_wrapper min-vh-60 min-vh-md-100" >
    <div class="slider-inner" style="background: #FFF  url('css/theme/seo/images/hero/hero-1.jpg') center center no-repeat; background-size: cover;">

        <div class="vertical-middle">
            
            <div class="container">
                <div class="row">
                    <div class="col-md-7  py-5">
                        <div class="slider-title" >
                            <blockquote class="quote">
                                <br>
                                <h2 class="display-4" style="font-weight: 800; color: #fd9c3c;  text-transform: capitalize;">Get your<br>perfect essay <br> today</br></h2>
                            </blockquote>
                            
                            
                        </div>
                    </div>
                    <div class="col-md-5">
                        <div class="form-widget mb-3">
                            
                            <div class="form-section px-4 py-3 bg-white rounded shadow-lg">
                                <div class="heading-block border-bottom-0 center">
                                    <h4 class="ls0">Place an order</h4>
                                </div>
                                
                                <div class="col-12 form-group">
                                    <div class="row">
                                        <div class="col-sm-4 col-form-label">
                                            <label>Type of service:</label>
                                        </div>
                                        <div class="col-sm-8">
                                            
                                            <select class = "form-select required valid"  id = "my_service" name="" id="">
                                                <option> select a service</option>
                                                    @foreach ($services as $service)
                                                    <option value="{{$service->id}}">{{$service->name}}</option>
                                                    @endforeach
                                                
                                                

                                            </select>
                                        </div>
                                    </div>
                                    
                                </div>
                                <div class="col-12 form-group">
                                    <div class="row">
                                        <div class="col-sm-4 col-form-label">
                                            <label>Type of paper</label>
                                        </div>
                                        <div class="col-sm-8">
                                            <select class = "form-select required valid" name="" id="">
                                                    
                                                <option value="1">Essay</option>
                                                <option value="2">Dissertation</option>
                                                <option value="3">Admission services</option>
                                                <option value="4">Editing</option>

                                            </select>
                                        </div>
                                    </div>
                                    
                                </div>

                                <div class="col-12 form-group">
                                    <div class="row">
                                        <div class="col-sm-4 col-form-label">
                                            <label>No of pages : </label>
                                        </div>
                                        <div class="col-sm-8 ">
                                    
                                            <input type="number" name="numberOfSources" class="form-select" min="0" id="">
                                        </div>

                                        
                                    </div>
                                    
                                </div>
                                <div class="col-12 form-group">
                                    <div class="row">
                                        <div class="col-sm-4 col-form-label">
                                            <label>Academic level: </label>
                                        </div>
                                        <div class="col-sm-8">
                                            
                                            <select class = "form-select required valid" name="" id="">
                                                    
                                                <option value="1">High school</option>
                                                <option value="2">Dissertation</option>
                                                <option value="3">Admission services</option>
                                                <option value="4">Editing</option>

                                            </select>
                                        </div>

                                        
                                    </div>
                                    
                                </div>
                                <div class="col-12 form-group">
                                    <div class="row">
                                        <div class="col-sm-4 col-form-label">
                                            <label>Urgency: </label>
                                        </div>
                                        <div class="col-sm-8">
                                            
                                            <select class = "form-select required valid" name="" id="">
                                                    
                                                <option value="1">14 days</option>
                                                <option value="2">7 days</option>
                                                <option value="3">6 hrs</option>
                                                <option value="4">4 hrs</option>

                                            </select>
                                        </div>
                                        {{-- <small >price per page: $12.99</small> --}}
                                        
                                    </div>
                                    
                                </div>

                                
                                <div class="col-12">
                                    <div class="row">
                                        <div class="col-sm-7">
                                            <div class="heading-block border-bottom-0 center">
                                                <h4 class="ls0">Total price</h4>
                                            </div>
                                        </div>
                                        <div class="col-sm-5" id = "price" >
                                            {{-- <h4 id = "price_id" class="ls0 center"></h4> --}}
                                            
                                        </div>
                                        
                                    </div>
                                </div>


                                <div class="col-12">
                                    <a href="" class="button button-small button-3d button-large button-circle w-100 text-center">ORDER</a>
                                </div>
    
                                        
                                    
                            </div>
                        </div>	
                    </div>
                    
                </div>
            </div>

        </div>

        

    </div>
</section>