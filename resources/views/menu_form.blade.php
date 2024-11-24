<form action="/menu" method="POST">
    @csrf
    <label for="name">Item Name:</label>
    <input type="text" id="name" name="name" required>

    <label for="type">Category:</label>
    <select id="type" name="type" required>
        <option value="breakfast">Breakfast</option>
        <option value="lunch">Lunch</option>
        <option value="dinner">Dinner</option>
    </select>

    <label for="description">Description:</label>
    <textarea id="description" name="description"></textarea>

    <label for="price">Price:</label>
    <input type="number" id="price" name="price" step="0.01">

    <button type="submit">Add Item</button>
</form>
