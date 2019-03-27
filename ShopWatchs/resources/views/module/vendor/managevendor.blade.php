
    <div class="container">
        <form method="post" action="{{ route('admin.store')}}" enctype="multipart/form-data">
            @csrf
            <div class="form-group">
                <label for="name">Price</label>
                <input type="text" class="form-control" name='name' placeholder="name">
            </div>
            <div class="form-group">
                <label for="description">Description</label>
                <textarea class="form-control" name="description" cols="30" rows="8" placeholder="description"></textarea>
            </div>
            <div class="form-group">
                <label for="price">Price</label>
                <input type="number" class="form-control" name='price' placeholder="price">
            </div>
            <div class="form-group">
                <select name="category_id" class="form-control">
                    @foreach($categories as $category)
                        <option value={{ $category->id }}>{{$category->name}}</option>
                    @endforeach
                </select>
            </div>
            <div>
                <label for="promotion">Promotion:</label>
                @foreach($promotions as $promotion)
                    <br/><input type="checkbox" name="promotion[]" value="{{ $promotion->id }}"/> {{ $promotion->description }}
                @endforeach
            </div>
            <div class="form-group">
                <label for="image">File</label>
                <input type="file" class="form-control-file" id="image" name="image"/>
            </div>


            <input type="text" name="_method" value="put" hidden>
            <button type="submit" class="btn btn-primary">Add to Store</button>
        </form>
    </div>


