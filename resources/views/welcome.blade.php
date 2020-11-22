<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Rut gon link</title>
    <link rel="stylesheet" href="{{mix('css/app.css')}}">
    <script src="{{mix('js/app.js')}}"></script>
</head>

<body>
    <div class="container mt-5">
        <div class="row">
            <div class="col">
                @if (\Session::has('message'))
                    <div class="alert alert-primary" role="alert">
                        {{Session::get('message')}}
                    </div>
                @endif
                @if($errors->any())
                    @foreach($errors->all() as $error)
                        <div class="alert alert-danger" role="alert">
                            {{$error}}
                        </div>
                    @endforeach
                @endif
                <h2>Rut gon link</h2>
                <form method="post" action="{{route('link.store')}}">
                    @csrf
                    <div class="form-group">
                        <label for="original_link">Nhap link</label>
                        <input type="text" name="original_link" class="form-control" id="original_link" value="{{old('original')}}" placeholder="Nhap Link">
                    </div>
                    <div class="form-group">
                        <label for="short_link">Tuy chinh link</label>
                        <input type="text" name="short_link" class="form-control" id="short_link">
                    </div>
                    <div class="form-group">
                        <label for="exampleFormControlSelect1">Chon the loai</label>
                        <select class="form-control" name="category_id" id="exampleFormControlSelect1">
                            @foreach($categories as $category)
                                <option value="{{ $category->id}}">{{$category->name}}</option>
                            @endforeach

                        </select>
                    </div>
                    <div class="form-group">
                        <button class="btn btn-primary">Chap Nhan</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</body>

</html>
