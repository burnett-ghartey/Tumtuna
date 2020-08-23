
    <section class="search-sec">
        <div class="container">
            <form method="POST" action="/search/filter" class="posts_search">
                @csrf
                <div class="row">
                            <div class="col-sm">
                                <input type="text" class="form-control search-slt" placeholder="Enter City" name="city">
                            </div>
                            <div class="col-sm">
                                <select class="form-control search-slt" id="Select categories" name="category_id">
                                    <option>Select Category</option>
                                    @foreach($categories as $category)
                                    <option value="{{$category->id}}">{{$category->name}}</option>
                                        @endforeach
                                </select>
                            </div>
                            <div class="col-sm">
                                <button type="submit" class="btn wrn-btn">Search</button>
                            </div>
                </div>
            </form>
        </div>
    </section>
    
   

