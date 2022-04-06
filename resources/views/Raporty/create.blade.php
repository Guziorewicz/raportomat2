@extends('layouts.app')
@section('content')
<section> 
    <br></br>
    <br></br>
<div id="wrap">
       
            <div class="row">
                <form  action="{{route('raporty.store')}}" method="POST" name="upload_excel" enctype="multipart/form-data">
                @csrf     
                <fieldset>
                        <!-- Nazwa Formularza -->
                        <legend>Adding CSV</legend>
                        
                        <div class="form-group">
                            <label class="col-md-4 control-label" for="filebutton">Open File</label>
                            <div class="col-md-4">
                                <input type="file" name="file" id="file" class="input-large">
                            </div>
                        </div>
                        <!-- Przycisk -->
                        <div class="form-group">
                            <label class="col-md-4 control-label" for="singlebutton">Import</label>
                            <div class="col-md-4">
                                <button type="submit" id="submit" name="Import" class="btn btn-primary button-loading" data-loading-text="Loading...">Import</button>
                            </div>
                        </div>
                    </fieldset>
                </form>
            </div>
            <?php
  //  get_all_records();
            ?>
        
    </div>
</section>
    @endsection 