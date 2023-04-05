<form id="update-form" method="post" action="{{ route('update.json', ['index' => $index]) }}">
    @method('PUT')
    @csrf
    <label for="title">Title:</label>
    <input type="text" name="title" id="title" value="{{ $addon['title'] }}">

    <label for="type">Type:</label>
    <input type="text" name="type" id="type" value="{{ $addon['type'] }}">

    <label for="price">Price:</label>
    <input type="text" name="price" id="price" value="{{ $addon['price'] }}">

    <button type="submit" class="btn-success rounded">
        Save
    </button>
</form>

