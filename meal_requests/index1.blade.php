
<form action="{{ route('meal-requests.store') }}" method="POST">
    @csrf
    <input type="hidden" name="chef_id" value="{{ $chef->id }}">
    <div class="d-flex align-items-start">
        <div class="container">
            <div class="avatar-upload">
                <div class="file">
                    <label for="imageUpload">Click Here To Upload Your Image
                        <i class="mdi mdi-cloud-upload"></i>
                    </label>
                    <input type='file' id="imageUpload" accept=".png, .jpg, .jpeg" style="display: none;" name="image"/>
                </div>
                <div>
                    <div id="imagePreview">
                        <img id="uploadedImage" class="me-2 rounded-circle">
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="form-row">
        <div class="input-data">
            <input type="text" required name="meal_name">
            <div class="underline"></div>
            <label for="">DMeal Name</label>
        </div>
       
    </div>
    <div class="form-row">
        <div class="input-data">
            <input type="time" required name="requested_time">
            <div class="underline"></div>
            <label for="endTimeInput">  Requested Time</label>
        </div>
        <div class="input-data">
            <input type="date" required name="requested_date">
            <div class="underline"></div>
            <label for="dayInput">Date</label>
        </div>
    </div>
   
    
    <div class="forms">
        <div class="row mt-4">
            <button type="button" class="btn btn-primary" onclick="window.history.back();">CANCEL</button>
        </div>
        <div class="row mt-4">
            <button type="submit" class="btn btn-primary">SAVE</button>
        </form>
        </div>
    </div>
</form>