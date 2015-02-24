
{{Form::model($product, array('method' => 'put', 'files' => 'true', 'route' => array('product.update', $product->id)))}}

<div class="row" >
	<center>
	<div class="small-12 large-6 columns">
		<label style="color:#ffffff">Product Name</label>
		{{Form::text('name')}}

	</div>

	<div class="small-12 large-6 columns">
		<label style="color:#ffffff">PayPal ID</label>
		{{Form::text('paypal')}}
	</div>


	
	<div class="small-12 large-12 columns">
		<label style="color:#ffffff">Product Description</label>
		{{Form::textarea('description', $product->description, array('placeholder' => 'Product Description', 'style' => 'max-height:150px;'))}}
	</div>
	<div class="small-12 large-12 columns">&nbsp</div>



	
	<div class="small-12 large-6 columns">
		<label style="color:#ffffff">Price Display</label>
		{{Form::text('price')}}		
	</div>

	
	<div class="small-12 large-6 columns">
		<label style="color:#ffffff">Category</label>
		<select name="category" style="color:#000000;max-width:300px">
				<option value="{{$product->category}}">{{Str::title($product->category)}}</option>
					@foreach(ProductCat::select('name')->distinct()->get() as $cats)
						<option value="{{$cats->name}}">{{$cats->name}}</option>
					@endforeach
		</select>
{{--MODAL LINK--}}
			<a href="#" data-reveal-id="newProductCat" style="color:#700000;background-color:#000000;font-size:30px"><i class="fi-plus"></i></a>
{{--END MODAL LINK--}}
	</div>

	<div class="small-12 large-12 columns">&nbsp</div>
		<div class="small-12 large-4 columns">
			
			{{Form::checkbox('active', 1)}}<label style="color:#ffffff">Active</label>
		</div>
		<div class="small-12 large-4 columns">
			
			{{Form::checkbox('upcomming', 1)}}<label style="color:#ffffff">Upcomming</label>
	</div>
		<div class="small-12 large-4 columns">
			
			{{Form::checkbox('onsale', 1)}}<label style="color:#ffffff">On Sale</label>
	</div>

</center>
</div>
<div class="row" style="text-align:left;">
<hr>

{{--Size Options--}}

		
				@foreach(Size::select('size')->distinct()->get() as $size)
				<div class="small-12 large-6 columns" >	
					
		
				{{Form::checkbox($size, 1, $product->Sizes($size->size))}}

						<label style="color:#ffffff">{{Str::title($size->size)}}</label>
				</div>
				@endforeach
				<div class="small-12 large-6 columns">
						{{Form::checkbox('onesize', 1, $product->onesize)}}
						<label style="color:#ffffff">One Size Only</label>
				</div>




{{--END Size Options--}}

<hr>


{{--Images--}}

				<div class="small-12 large-6 columns">
					<label style="color:#ffffff">Main Image</label>
					{{Form::file('main_image')}}
				</div>
{{--END Images--}}



	
	<div class="small-block-grid-5 large-block-grid-9">
		Current Images:<br><img style="max-height:100px" src="http://www.eternallynocturnal.com/store/public/thumbs/products/{{$product->name}}.jpg">

		@foreach(Imager::where('product_id', $product->id)->get() as $imgs)
			<img src="http://www.eternallynocturnal.com/store/public/thumbs/products/{{$imgs->name}}" style="max-height:100px" />
		@endforeach

	</div>

</div>



<button style="color:#700000;background-color:#000000;font-size:30px"><i class="fi-play-circle"></i> Update {{$product->name}} </button>

<label style="color:#ffffff"></label>






{{Form::close()}}




{{--MODAL CODE HERE--}}

	

	{{--NEW PRODUCT CATEGORY--}}

		<div id="newProductCat" class="reveal-modal" style="max-width:80%;height:200px;overflow-y:scroll;background-color:#000000;" data-reveal> 

	                              {{View::make('productCats.create')}}

	        <a class="close-reveal-modal">&#215;</a>


	      </div>
	{{--END NEW PRODUCT CATEGORY--}}


{{--END MODAL CODE--}}