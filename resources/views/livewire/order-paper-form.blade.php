<div class="form-widget">

    <div class="form-section px-4 py-3 bg-white rounded shadow-lg">
        <form class="row" wire:submit.prevent="register">
            
            @if ($currentStep == 1)
            <div class="form-step-one">
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
                            <label>Type of paper:</label>
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
            </div>   
            @endif
            
            @if($currentStep == 2 ) 
            <div class="form-step-two">
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
            </div>
            @endif   
                
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
                        @if ($currentStep==1)
                            <div class="row justify-content-center">
                                <a  class="button button-small button-3d button-small button-circle w-80 text-center" wire:click="moveTonextStep()">Proceed to next step</a>
                            </div>  
                        @endif
                        @if ($currentStep==2)
                        <div class="row justify-content-center">
                            <a  class="button button-small button-3d button-small button-circle w-80 text-center" wire:click=" moveToPreviousStep()">Proceed to previous page</a>
                        </div>  
                        @endif
                        
                    </div>
                </div>
                
                
            </div>
                  
            
            
            
            
        </form>
    </div>
</div> 
