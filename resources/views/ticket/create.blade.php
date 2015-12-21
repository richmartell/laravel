<h1>Create Ticket</h1>

<form method="POST" action="/ticket/create">
    {!! csrf_field() !!}

    <div>
        Customer Name
        <input type="text" name="customer_name" value="{{ old('customer_name') }}">
    </div>

    <div>
        Customer Address
        <input type="text" name="customer_address" value="{{ old('customer_address') }}">
    </div>

    <div>
        Customer Phone
        <input type="text" name="customer_tel" value="{{ old('customer_tel') }}">
    </div>

    <div>
        Customer Email
        <input type="email" name="customer_email" value="{{ old('customer_email') }}">
    </div>

    <div>
    	<p>Fauly or Enquiry:
	    <select name="type">
	    	<option value="fault">Fault</option>
	    	<option value="enquiry">Enquiry</option>
	    </select>
	</div>

	<div>
		<p>Category:
	    <select name="category_id">
	    	@foreach( $categories as $category )
	    		<option value="{{ $category->id }}">{{ $category->name }}</option>
	    	@endforeach
	    </select>
    </div>

	<div>
        Post serial 
        <input type="name" name="post_serial" value="{{ old('post_serial') }}">
    </div>

    <div>
        Description:
        <textarea name="description"  rows="4" cols="50">{{ old('description') }}</textarea>
    </div>

    <div>
        <button type="submit">Create</button>
    </div>
</form>