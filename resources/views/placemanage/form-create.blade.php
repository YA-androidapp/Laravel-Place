<form action="/place" method="post">
    <input type="hidden" name="id" value="">{{ csrf_field() }}
    <div class="form-group">
        <div class="input-group">
            <label>{{__('Description')}}: </label>
            <div class="input-group">
                <input type="text" id="desc" name="desc" value="" class="form-control input-sm">
            </div>
            @if($errors->has('desc')){{implode($errors->get('desc'))}}@endif
        </div>
    </div>
    <div class="form-group">
        <div class="input-group">
            <label>{{__('Owner')}}: </label>
            <input type="text" id="owner" name="owner" value="" class="form-control input-sm">
        </div>
        @if($errors->has('owner')){{implode($errors->get('owner'))}}@endif
    </div>
    <div class="form-group">
        <div class="input-group">
            <label>{{__('Latitude')}}: </label>
            <input type="number" id="lat" name="lat" value="" min="-90" max="90" step="any" class="form-control input-sm"
               >
        </div>
        @if($errors->has('lat')){{implode($errors->get('lat'))}}@endif
    </div>
    <div class="form-group">
        <div class="input-group">
            <label>{{__('Longitude')}}: </label>
            <input type="number" id="lng" name="lng" value="" min="-180" max="180" step="any" class="form-control input-sm"
               >
        </div>
        @if($errors->has('lng')){{implode($errors->get('lng'))}}@endif
    </div>
    <div class="form-group">
        <input type="submit" class="btn btn-default" value="Create">
    </div>
</form>