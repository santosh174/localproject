<div class="form-group">
   
    {{-- <pre>
    @php
        print_r($errors->all())
    @endphp
    </pre> --}}
        <label for="">{{$lable}}</label>
        <input type="{{$type}}" class="form-control" name="{{$name}}" id="" placeholder="" value="{{old('name')}}">
        <span class="text_denger">
          @error('name')
              {{$message}}
          @enderror
        </span>
      </div> 