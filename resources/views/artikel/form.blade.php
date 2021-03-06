@csrf

<div class="form-group row">
  <label for="judul" class="col-md-4 col-form-label text-md-right">{{ __('Judul') }}</label>

   <div class="col-md-6">
     <input id="judul" type="text" class="form-control @error('judul') is-invalid @enderror" name="judul" value="{{ old('judul') }}" required autofocus>

        @error('judul')
         <span class="invalid-feedback" role="alert">
       <strong>{{ $message }}</strong>
            </span>
         @enderror
    </div>

 </div>
 
 <div class="form-group row ">
 <label for="kategori_artikel_id" class="col-md-4 col-form-label text-md right">{{ __('kategori Artikel') }}</label>

   <div class="col-md-6">

         {!!Form::select('kategori_artikel_id',$kategoriArtikel,null,["class"=>"form-control","required"])!!}

      @error('kategori_artikel_id')
      <span class="invalid-feedback" role="alert">
          <strong>{{ $message }}</strong>
       </span>
         @enderror
    </div>

    </div>
 
 <div class="form-group row" >
 <label for="isi" class="col-md--4 col -form-label text-md right">{{ __('isi') }}</label>

   <div class="col-md-6">

         {!!Form::textarea('isi',null,[class'=>'form-control'])!!}

      @error('isi')
      <span class="invalid-feedback" role="alert">
          <strong>{{ $message }}</strong>
       </span>
         @enderror
    </div>
  </div>

<input id="users_id" type="hidden" class="from-control @error('users_id') is-invalid @enderror" name="users_id" value="{{ Auth::user()->id }}" required>

<div class="form-group row" >
    <div class="col-md-6 offset-md-4">
       <button type="submit" class="btn btn-primary">
             {{ __('Simpan Data') }}
         </button>
        <a herf="{!! route('kategori_artikel.index') !!}" class="btn btn-danger">
             {{ __('Batal') }}
        </a>
    </div>
 </div>

 