<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Real-time Clock (PH Time)</title>
</head>
<body style="text-align: center; font-family: Arial, sans-serif;">

    
    <!-- Flag Image -->
    
    <h3 id="realTimeClock" style="font-size: 18px; margin-left: -250px; display: flex; align-items: center; color: red; font-weight: 500;">
    <!-- <img src="{{ asset('images/philippines-flag.png') }}" alt="Philippines Flag" width="50px" style="vertical-align: middle; margin-right: 10px;"> -->
    {{ now()->setTimezone('Asia/Manila')->format('F j, Y h:i:s A') }}
</h3>

    <script>
        function updateClock() {
            fetch('/get-current-time')
                .then(response => response.json())
                .then(data => {
                    document.getElementById('realTimeClock').innerHTML = data.currentTime;
                });
        }

        setInterval(updateClock, 1000); // Update every second
    </script>
</body>
</html>
