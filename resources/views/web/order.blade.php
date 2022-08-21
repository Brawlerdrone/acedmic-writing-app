{{-- @extends('web.layout.template')

@section('content');

<section id="content">
    <div class="content-wrap ">
        <div class="container clearfix">
            <div class="row justify-content-center mx-6">
                <div class="col-md-8 mb-3">
                    <div class="form-widget">               
                        <div class="card shadow p-3">
                            <form class="row "  enctype="multipart/form-data">
                                    
                                <div class="col-12 form-group">
                                    <div class="row">
                                        <div class="col-sm-4 col-form-label">
                                            <label>Type of service:</label>
                                        </div>
                                        <div class="col-sm-8">
                                            
                                            <select class = "form-select required valid" name="" id="">
                                                 
                                                <option value="1">Academic paper writing</option>
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
                                            <label> Subject Area </label>
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
                                            <label>Topic</label>
                                        </div>
                                        <div class="col-sm-8">
                                           
                                            <input type="text" name="topic" class="form-control" id="">
                                        </div>

                                        
                                    </div>
                                    
                                </div>

                                 <div class="col-12 form-group mb-2">
                                    <div class="row">
                                        <div class="col-sm-4 col-form-label">
                                            <label>Paper details</label>
                                        </div>
                                        <div class="col-sm-8">
                                            
                                            <textarea  class="form-control" cols="30" rows="10" style="resize: none;"></textarea>
                                          
                                            
                                        </div>

                                        
                                    </div>
                                    
                                </div> 
                               
                                <div class="col-12 form-group ">
                                    <div class="row">
                                        <div class="col-sm-4 col-form-label">
                                            <label>Page format</label>
                                        </div>
                                        <div class="col-sm-8">
                                            
                                            <select class = "form-select required valid" name="" id="">
                                                 
                                                <option value="1">MLA</option>
                                                <option value="2">APA</option>
                                                <option value="3">Chicago</option>
                                                <option value="4">Havard</option>

                                            </select>
                                        </div>

                                        
                                    </div>
                                    
                                </div>

                               

                                <div class="col-12 form-group">
                                    <div class="row">
                                        <div class="col-sm-4 col-form-label">
                                            <label>Academic Level</label>
                                        </div>
                                        <div class="col-sm-8">
                                            
                                            <select class = "form-select required valid" name="" id="">
                                                 
                                                <option value="1">Associate</option>
                                                <option value="2">Barchelor</option>
                                                <option value="3">Masters</option>
                                                <option value="4">Doctoral</option>

                                            </select>
                                        </div>

                                        
                                    </div>
                                    
                                </div>

                                <div class="col-12 form-group">
                                    <div class="row">
                                        <div class="col-sm-4 col-form-label">
                                            <label>Number of pages</label>
                                        </div>
                                        <div class="col-sm-8">
                                            
                                            <input type="number" name="numberOfSources" class="form-control" min="0" id="">
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
                                        <small>price per page: $12.99</small>
                                        
                                    </div>
                                    
                                </div>
                                
                                <div class="col-12">
                                    <div class="row">
                                        <div class="col-sm-6">
                                            <p class="ls0">Total price:</p>
                                        </div>
                                        <div class="col-sm-6">
                                            <p class="ls0 center">$12.99</p>
                                        </div>
                                       
                                    </div>
                                </div>
                                <div class="col-12">
                                   
                                    <div class="row">
                                        <div class="col-sm-12 px-5">
                                            <div class="row justify-content-center">
                                                <a href="#" class="button button-small button-3d button-small button-circle w-80 text-center">Proceed to next step</a>
                                            </div>
                                            
                                        </div>
                                    </div>
                                   
                                   
                                </div>
                               
                                
                            </form>
                        </div>
                    </div>
                    

                </div>

                <div class="col-md-4">

                    <div class="card bg-light">
                       
                        <div class="card-header center">
                            <h4 class="mt-3">
                                Order Summary
                            </h4>
                        </div>
                        <div class="card-body ">
                            <ul class="iconlist mb-0">
                                <li class="h6 pb-1"><i class="icon-line-circle-check"></i>Type of  Service : </li>
                                <li class="h6 pb-1"><i class="icon-line-circle-check"></i>Type of  Paper : </li>
                                <li class="h6 pb-1"><i class="icon-line-circle-check"></i>Subject area : </li>
                                <li class="h6 pb-1"><i class="icon-line-circle-check"></i>Details: </li>
                                <li class="h6 pb-1"><i class="icon-line-circle-check"></i>Type of  Service : </li>
                            </ul>
                        </div>
                    </div>
                    
                </div>
            </div>
           
        </div>
    </div>
</section>


@endsection --}}

@extends('web.layout.template')
@section('content')
<section id="content">
    <div class="content-wrap pt-2">
        <div class="container clearfix">
            <div class="row justify-content-center mx-6">
                <div class="col-md-8 mb-3">
                    {{-- <div class="form-widget">               
                        <div class="card shadow py-3 px-5">
                            <form class="row "  enctype="multipart/form-data">
                                    
                                <div class="col-12 form-group">
                                    <div class="row">
                                        <div class="col-sm-4 col-form-label">
                                            <label>Type of service:</label>
                                        </div>
                                        <div class="col-sm-8">
                                            
                                            <select class = "form-select required valid" name="" id="">
                                                 
                                                <option value="1">Academic paper writing</option>
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
                                            <label> Subject Area </label>
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
                                            <label>Topic</label>
                                        </div>
                                        <div class="col-sm-8">
                                           
                                            <input type="text" name="topic" class="form-control" id="">
                                        </div>

                                        
                                    </div>
                                    
                                </div>

                                <div class="col-12 form-group mb-2">
                                    <div class="row">
                                        <div class="col-sm-4 col-form-label">
                                            <label>Paper details</label>
                                        </div>
                                        <div class="col-sm-8">
                                            
                                            <textarea  class="form-control"  rows="5" style="resize: none;"></textarea>
                                          
                                            
                                        </div>

                                        
                                    </div>
                                    
                                </div> 
                               
                                <div class="col-12 form-group ">
                                    <div class="row">
                                        <div class="col-sm-4 col-form-label">
                                            <label>Page format</label>
                                        </div>
                                        <div class="col-sm-8">
                                            
                                            <select class = "form-select required valid" name="" id="">
                                                 
                                                <option value="1">MLA</option>
                                                <option value="2">APA</option>
                                                <option value="3">Chicago</option>
                                                <option value="4">Havard</option>

                                            </select>
                                        </div>

                                        
                                    </div>
                                    
                                </div>

                               

                                <div class="col-12 form-group">
                                    <div class="row">
                                        <div class="col-sm-4 col-form-label">
                                            <label>Academic Level</label>
                                        </div>
                                        <div class="col-sm-8">
                                            
                                            <select class = "form-select required valid" name="" id="">
                                                 
                                                <option value="1">Associate</option>
                                                <option value="2">Barchelor</option>
                                                <option value="3">Masters</option>
                                                <option value="4">Doctoral</option>

                                            </select>
                                        </div>

                                        
                                    </div>
                                    
                                </div>

                                <div class="col-12 form-group">
                                    <div class="row">
                                        <div class="col-sm-4 col-form-label">
                                            <label>Number of pages</label>
                                        </div>
                                        <div class="col-sm-8">
                                            
                                            <input type="number" name="numberOfSources" class="form-control" min="0" id="">
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
                                        <small>price per page: $12.99</small>
                                        
                                    </div>
                                    
                                </div>
                                
                                <div class="col-12">
                                    <div class="row">
                                        <div class="col-sm-6">
                                            <p class="ls0">Total price:</p>
                                        </div>
                                        <div class="col-sm-6">
                                            <p class="ls0 center">$12.99</p>
                                        </div>
                                       
                                    </div>
                                </div>
                                <div class="col-12">
                                   
                                    <div class="row">
                                        <div class="col-sm-12 px-5">
                                            <div class="row justify-content-center">
                                                <a href="#" class="button button-small button-3d button-small button-circle w-80 text-center">Proceed to next step</a>
                                            </div>
                                            
                                        </div>
                                    </div>
                                   
                                   
                                </div>
                               
                                
                            </form>
                        </div>
                    </div> --}}
                    
                    <div class="form-widget">
                        
                        <div class="form-section px-4 py-3 bg-white rounded shadow-lg">
                        <form class="row "  enctype="multipart/form-data">
                            <div id="first-page">
                                <div class="col-12 form-group">
                                    <div class="row">
                                        <div class="col-sm-4 col-form-label">
                                            <label>Type of service:</label>
                                        </div>
                                        <div class="col-sm-8">
                                            
                                            <select class = "form-select required valid" name="" id="">
                                                 
                                                <option value="1">Academic paper writing</option>
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
                                            <label>Type of paper: </label>
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
                                            <label> Subject Area </label>
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
                                            <label>Topic</label>
                                        </div>
                                        <div class="col-sm-8">
                                           
                                            <input type="text" name="topic" class="form-control" id="">
                                        </div>
    
                                        
                                    </div>
                                    
                                </div>
    
                                <div class="col-12 form-group mb-2">
                                    <div class="row">
                                        <div class="col-sm-4 col-form-label">
                                            <label>Paper details</label>
                                        </div>
                                        <div class="col-sm-8">
                                            
                                            <textarea  class="form-control"  rows="5" style="resize: none;"></textarea>
                                          
                                            
                                        </div>
    
                                        
                                    </div>
                                    
                                </div> 
                               
                                <div class="col-12 form-group ">
                                    <div class="row">
                                        <div class="col-sm-4 col-form-label">
                                            <label>Page format</label>
                                        </div>
                                        <div class="col-sm-8">
                                            
                                            <select class = "form-select required valid" name="" id="">
                                                 
                                                <option value="1">MLA</option>
                                                <option value="2">APA</option>
                                                <option value="3">Chicago</option>
                                                <option value="4">Havard</option>
    
                                            </select>
                                        </div>
    
                                        
                                    </div>
                                    
                                </div>
    
                               
    
                                <div class="col-12 form-group">
                                    <div class="row">
                                        <div class="col-sm-4 col-form-label">
                                            <label>Academic Level</label>
                                        </div>
                                        <div class="col-sm-8">
                                            
                                            <select class = "form-select required valid" name="" id="">
                                                 
                                                <option value="1">Associate</option>
                                                <option value="2">Barchelor</option>
                                                <option value="3">Masters</option>
                                                <option value="4">Doctoral</option>
    
                                            </select>
                                        </div>
    
                                        
                                    </div>
                                    
                                </div>
    
                                <div class="col-12 form-group">
                                    <div class="row">
                                        <div class="col-sm-4 col-form-label">
                                            <label>Number of pages</label>
                                        </div>
                                        <div class="col-sm-8">
                                            
                                            <input type="number" name="numberOfSources" class="form-control" min="0" id="">
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
                                        <small>price per page: $12.99</small>
                                        
                                    </div>
                                    
                                </div>
                                
                                <div class="col-12">
                                    <div class="row">
                                        <div class="col-sm-6">
                                            <p class="ls0">Total price:</p>
                                        </div>
                                        <div class="col-sm-6">
                                            <p class="ls0 center">$12.99</p>
                                        </div>
                                       
                                    </div>
                                </div>
                                <div class="col-12">
                                   
                                    <div class="row">
                                        <div class="col-sm-12 px-5">
                                            <div class="row justify-content-center">
                                                <a href="#" class="button button-small button-3d button-small button-circle w-80 text-center">Proceed to next step</a>
                                            </div>
                                            
                                        </div>
                                    </div>
                                   
                                   
                                </div>
                            </div>        
                          
                            
                           
                            
                        </form>
                        </div>
                    </div>
                </div>

                <div class="col-md-4">
                    <div class="form-widget">
                        <div class="form-section px-4 py-3 bg-white rounded shadow-lg">
                            <div class="heading-block border-bottom-0 center">
                                <h4 class="ls0">Place an order</h4>
                            </div>

                            <ul class="iconlist mb-0">
                                <li class="h6 pb-1"><i class="icon-line-circle-check"></i>Type of  Service : </li>
                                <li class="h6 pb-1"><i class="icon-line-circle-check"></i>Type of  Paper : </li>
                                <li class="h6 pb-1"><i class="icon-line-circle-check"></i>Subject area : </li>
                                <li class="h6 pb-1"><i class="icon-line-circle-check"></i>Details: </li>
                                <li class="h6 pb-1"><i class="icon-line-circle-check"></i>Type of  Service : </li>
                            </ul>
                        </div>
                        
                    </div>
                    
                </div>
            </div>
           
        </div>
    </div>
</section>
@endsection