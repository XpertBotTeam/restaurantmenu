<x-app-layout>
</x-app-layout>

<!DOCTYPE html>
<html lang="en">
<head>
    @include("admin.admincss")
</head>
<body>
<div class="container-scroller">
@include("admin.navbar")

    <div style="position: relative; top:60px; right:-150px">
        <form action="{{url('/uploadfood')}}" method="post" enctype="multipart/form-data">
            @csrf
            <div>
                <label>Title</label>
                <input type="text" name="title" placeholder="write a title" required>
            </div>
            <div>
                <label>price</label>
                <input type="num" name="price" placeholder="price" required>
            </div>
            <div>
                <label>image</label>
                <input type="file" name="image"  required>
            </div>
            <div>
                <div>
                    <label>description</label>
                    <input type="text" name="description"  placeholder="description"  required>
                </div>
                <div>

                <input type="submit" value="save">
            </div>

        </form>
    </div>


</div>
@include("admin.adminscript")

</body>
</html>
