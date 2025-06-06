@extends('layouts.admin')
@section('content')

<div class="card">
    <div class="card-header">
        {{ trans('global.edit') }} {{ trans('cruds.product.title_singular') }}
    </div>

    <div class="card-body">
        <form method="POST" action="{{ route("admin.products.update", [$product->id]) }}" enctype="multipart/form-data">
            @method('PUT')
            @csrf
            <div class="form-group">
                <label for="image">{{ trans('cruds.product.fields.image') }}</label>
                <div class="needsclick dropzone {{ $errors->has('image') ? 'is-invalid' : '' }}" id="image-dropzone">
                </div>
                @if($errors->has('image'))
                    <div class="invalid-feedback">
                        {{ $errors->first('image') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.product.fields.image_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="name">{{ trans('cruds.product.fields.name') }}</label>
                <input class="form-control {{ $errors->has('name') ? 'is-invalid' : '' }}" type="text" name="name" id="name" value="{{ old('name', $product->name) }}">
                @if($errors->has('name'))
                    <div class="invalid-feedback">
                        {{ $errors->first('name') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.product.fields.name_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="description">{{ trans('cruds.product.fields.description') }}</label>
                <input class="form-control {{ $errors->has('description') ? 'is-invalid' : '' }}" type="text" name="description" id="description" value="{{ old('description', $product->description) }}">
                @if($errors->has('description'))
                    <div class="invalid-feedback">
                        {{ $errors->first('description') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.product.fields.description_helper') }}</span>
            </div>
            <div class="form-group">
                <label>{{ trans('cruds.product.fields.category') }}</label>
                <select class="form-control {{ $errors->has('category') ? 'is-invalid' : '' }}" name="category" id="category">
                    <option value disabled {{ old('category', null) === null ? 'selected' : '' }}>{{ trans('global.pleaseSelect') }}</option>
                    @foreach(App\Models\Product::CATEGORY_SELECT as $key => $label)
                        <option value="{{ $key }}" {{ old('category', $product->category) === (string) $key ? 'selected' : '' }}>{{ $label }}</option>
                    @endforeach
                </select>
                @if($errors->has('category'))
                    <div class="invalid-feedback">
                        {{ $errors->first('category') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.product.fields.category_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="tahun">{{ trans('cruds.product.fields.tahun') }}</label>
                <input class="form-control {{ $errors->has('tahun') ? 'is-invalid' : '' }}" type="number" name="tahun" id="tahun" value="{{ old('tahun', $product->tahun) }}" step="0.01">
                @if($errors->has('tahun'))
                    <div class="invalid-feedback">
                        {{ $errors->first('tahun') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.product.fields.tahun_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="warna">{{ trans('cruds.product.fields.warna') }}</label>
                <input class="form-control {{ $errors->has('warna') ? 'is-invalid' : '' }}" type="text" name="warna" id="warna" value="{{ old('warna', $product->warna) }}" step="0.01">
                @if($errors->has('warna'))
                    <div class="invalid-feedback">
                        {{ $errors->first('warna') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.product.fields.warna_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="tipe">{{ trans('cruds.product.fields.tipe') }}</label>
                <input class="form-control {{ $errors->has('tipe') ? 'is-invalid' : '' }}" type="text" name="tipe" id="tipe" value="{{ old('tipe', $product->tipe) }}" step="0.01">
                @if($errors->has('tipe'))
                    <div class="invalid-feedback">
                        {{ $errors->first('tipe') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.product.fields.tahun_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="mesin">{{ trans('cruds.product.fields.mesin') }}</label>
                <select class="form-control {{ $errors->has('mesin') ? 'is-invalid' : '' }}" name="mesin" id="mesin">
                    <option value="" disabled {{ old('mesin', $product->mesin) === null ? 'selected' : '' }}>
                        {{ trans('cruds.product.fields.mesin') }}
                    </option>
                    @foreach(App\Models\Product::JENIS_MESIN as $key => $label)
                        <option value="{{ $key }}" {{ old('mesin', $product->mesin) === $key ? 'selected' : '' }}>
                            {{ $label }}
                        </option>
                    @endforeach
                </select>
                @if($errors->has('mesin'))
                    <div class="invalid-feedback">
                        {{ $errors->first('mesin') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.product.fields.mesin_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="cc">{{ trans('cruds.product.fields.cc') }}</label>
                <input class="form-control {{ $errors->has('cc') ? 'is-invalid' : '' }}" type="number" name="cc" id="cc" value="{{ old('cc', $product->cc) }}" step="0.01">
                @if($errors->has('cc'))
                    <div class="invalid-feedback">
                        {{ $errors->first('cc') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.product.fields.cc_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="pajak">{{ trans('cruds.product.fields.pajak') }}</label>
                <input class="form-control {{ $errors->has('pajak') ? 'is-invalid' : '' }}" type="text" name="pajak" id="pajak" value="{{ old('pajak', $product->pajak) }}" step="0.01">
                @if($errors->has('pajak'))
                    <div class="invalid-feedback">
                        {{ $errors->first('pajak') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.product.fields.tahun_helper') }}</span>
            </div>
            <div class="form-group">
                <label>{{ trans('cruds.product.fields.transmition') }}</label>
                <select class="form-control {{ $errors->has('transmition') ? 'is-invalid' : '' }}" name="transmition" id="transmition">
                    <option value disabled {{ old('transmition', null) === null ? 'selected' : '' }}>{{ trans('global.pleaseSelect') }}</option>
                    @foreach(App\Models\Product::TRANSMITION as $key => $label)
                        <option value="{{ $key }}" {{ old('transmition', $product->transmition) === (string) $key ? 'selected' : '' }}>{{ $label }}</option>
                    @endforeach
                </select>
                @if($errors->has('transmition'))
                    <div class="invalid-feedback">
                        {{ $errors->first('transmition') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.product.fields.category_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="price">{{ trans('cruds.product.fields.price') }}</label>
                <input class="form-control {{ $errors->has('price') ? 'is-invalid' : '' }}" type="number" name="price" id="price" value="{{ old('price', $product->price) }}" step="0.01">
                @if($errors->has('price'))
                    <div class="invalid-feedback">
                        {{ $errors->first('price') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.product.fields.price_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="stock">{{ trans('cruds.product.fields.stock') }}</label>
                <input class="form-control {{ $errors->has('stock') ? 'is-invalid' : '' }}" type="number" name="stock" id="stock" value="{{ old('stock', $product->stock) }}" step="1">
                @if($errors->has('stock'))
                    <div class="invalid-feedback">
                        {{ $errors->first('stock') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.product.fields.stock_helper') }}</span>
            </div>
           
            <div class="form-group">
                <button class="btn btn-danger" type="submit">
                    {{ trans('global.save') }}
                </button>
            </div>
        </form>
    </div>
</div>



@endsection

@section('scripts')
<script>
    Dropzone.options.imageDropzone = {
    url: '{{ route('admin.products.storeMedia') }}',
    maxFilesize: 2, // MB
    acceptedFiles: '.jpeg,.jpg,.png,.gif',
    maxFiles: 1,
    addRemoveLinks: true,
    headers: {
      'X-CSRF-TOKEN': "{{ csrf_token() }}"
    },
    params: {
      size: 2,
      width: 4096,
      height: 4096
    },
    success: function (file, response) {
      $('form').find('input[name="image"]').remove()
      $('form').append('<input type="hidden" name="image" value="' + response.name + '">')
    },
    removedfile: function (file) {
      file.previewElement.remove()
      if (file.status !== 'error') {
        $('form').find('input[name="image"]').remove()
        this.options.maxFiles = this.options.maxFiles + 1
      }
    },
    init: function () {
@if(isset($product) && $product->image)
      var file = {!! json_encode($product->image) !!}
          this.options.addedfile.call(this, file)
      this.options.thumbnail.call(this, file, file.preview ?? file.preview_url)
      file.previewElement.classList.add('dz-complete')
      $('form').append('<input type="hidden" name="image" value="' + file.file_name + '">')
      this.options.maxFiles = this.options.maxFiles - 1
@endif
    },
    error: function (file, response) {
        if ($.type(response) === 'string') {
            var message = response //dropzone sends it's own error messages in string
        } else {
            var message = response.errors.file
        }
        file.previewElement.classList.add('dz-error')
        _ref = file.previewElement.querySelectorAll('[data-dz-errormessage]')
        _results = []
        for (_i = 0, _len = _ref.length; _i < _len; _i++) {
            node = _ref[_i]
            _results.push(node.textContent = message)
        }

        return _results
    }
}

</script>
@endsection