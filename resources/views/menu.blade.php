<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Menu</title>
</head>
<body>

    <h1>Menu</h1>

    <!-- Tabs -->
    <div class="tabs">
        <button class="tab-button" onclick="showTab('breakfast')">Breakfast</button>
        <button class="tab-button" onclick="showTab('lunch')">Lunch</button>
        <button class="tab-button" onclick="showTab('dinner')">Dinner</button>
    </div>

    <!-- Tab Contents -->
    <div id="breakfast" class="tab-content">
        <h2>Breakfast</h2>
        @foreach ($breakfastItems as $item)
            <div class="menu-item">
                <strong>{{ $item->name }}</strong>
                <p>{{ $item->description }}</p>
                <span>{{ $item->price ? 'Price: $' . $item->price : '' }}</span>
            </div>
        @endforeach
    </div>

    <div id="lunch" class="tab-content" style="display:none;">
        <h2>Lunch</h2>
        @foreach ($lunchItems as $item)
            <div class="menu-item">
                <strong>{{ $item->name }}</strong>
                <p>{{ $item->description }}</p>
                <span>{{ $item->price ? 'Price: $' . $item->price : '' }}</span>
            </div>
        @endforeach
    </div>

    <div id="dinner" class="tab-content" style="display:none;">
        <h2>Dinner</h2>
        @foreach ($dinnerItems as $item)
            <div class="menu-item">
                <strong>{{ $item->name }}</strong>
                <p>{{ $item->description }}</p>
                <span>{{ $item->price ? 'Price: $' . $item->price : '' }}</span>
            </div>
        @endforeach
    </div>

    <!-- JavaScript for Tabs -->
    <script>
        function showTab(tabId) {
            // Hide all tab contents
            document.querySelectorAll('.tab-content').forEach(tab => {
                tab.style.display = 'none';
            });

            // Show the selected tab
            document.getElementById(tabId).style.display = 'block';

            // Remove 'active' class from all buttons
            document.querySelectorAll('.tab-button').forEach(button => {
                button.classList.remove('active');
            });

            // Add 'active' class to the clicked button
            event.target.classList.add('active');
        }

        // Show the first tab by default
        document.querySelector('.tab-button').click();
    </script>

</body>
</html>
