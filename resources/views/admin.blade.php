@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div id="signupbox" style=" margin-top:50px" class="mainbox col-md-6 col-md-offset-3 col-sm-8 col-sm-offset-2">
            <div class="panel panel-info">
                <div class="panel-heading">
                    <div class="panel-title">Add Item</div>
                    <div style="float:right; font-size: 85%; position: relative; top:-10px"><a id="signinlink" href="/accounts/login/">Admin</a></div>
                </div>  
                <div class="panel-body" >
                    <form method="post" action=".">
                        <input type='hidden' name='csrfmiddlewaretoken' value='XFe2rTYl9WOpV8U6X5CfbIuOZOELJ97S' />
                                

                        <form  class="form-horizontal" method="post" >
                            <div id="div_id_number" class="form-group required">
                                 <label for="id_number" class="control-label col-md-4  requiredField">Name<span class="asteriskField">*</span> </label>
                                 <div class="controls col-md-8 ">
                                     <input class="input-md textinput textInput form-control" id="id_number" name="number" placeholder="add item" style="margin-bottom: 10px" type="text" />
                                </div> 
                            </div> 
                            <div id="div_id_number" class="form-group required">
                                 <label for="id_number" class="control-label col-md-4  requiredField" >Image<span class="asteriskField">*</span> </label>
                                 <div class="controls col-md-8 ">
                                     <input class="input-md textinput textInput form-control" id="id_number" name="number" placeholder="" style="margin-bottom: 10px" type="file" />
                                </div> 
                            </div>
                             <div id="div_id_number" class="form-group required">
                                 <label for="id_number" class="control-label col-md-4  requiredField">Price<span class="asteriskField">*</span> </label>
                                 <div class="controls col-md-8 ">
                                     <input class="input-md textinput textInput form-control" id="id_number" name="number" placeholder="Price" style="margin-bottom: 10px" type="text" />
                                </div> 
                            </div> 
                            <div id="div_id_location" class="form-group required">
                                <label for="id_location" class="control-label col-md-4  requiredField">Description<span class="asteriskField">*</span> </label>
                                <div class="controls col-md-8 ">
                                    <input class="input-md textinput textInput form-control" id="id_location" name="location" placeholder="Your Pincode and City" style="margin-bottom: 10px" type="text" />
                                </div> 
                            </div>
                            <div class="form-group"> 
                                <div class="aab controls col-md-4 "></div>
                                <div class="controls col-md-8 ">
                                    <input type="submit" name="Submit" value="Submit" class="btn btn-primary btn btn-info" id="submit-id-signup" />
                                    
                                </div>
                            </div> 
                                
                        </form>

                    </form>
                </div>
            </div>
        </div> 
    </div>
              
   
</div>

       
@endsection
