<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    @vite('resources/css/intro.css')
    <title>Intro</title>
</head>
<body>
    <h1>calculator na mabangis </h1>

    <p>note: think of a number that it will be equal to 67 after adding or subtracting</p>
    
    <div id="calculator" style="margin:20px;">
        <label> <input type="number" id="a" value="0"></label>
        <label> <input type="number" id="b" value="0"></label>
        <button id="addBtn">Add</button>
        <button id="subBtn">Subtract</button>

        <div id="result" style="margin-top:12px;font-weight:bold;"></div>
        <div id="gifContainer" style="margin-top:20px;"></div>
    </div>

    <script>
        async function callCalc(path) {
            const a = document.getElementById('a').value;
            const b = document.getElementById('b').value;

            // ewan gawa ng AI yan
            const url = `${path}?a=${encodeURIComponent(a)}&b=${encodeURIComponent(b)}`;
            const res = await fetch(url, { method: 'GET' });
            const json = await res.json();
            document.getElementById('result').textContent = `Result: ${json.result}`;
            
            // Check if result is 67 and show GIF
            const gifContainer = document.getElementById('gifContainer');
            if (json.result === 67) {
                gifContainer.innerHTML = '<img src="/bosnov-67.gif" style="width:300px;height:auto;border-radius:8px;">';
            } else {
                gifContainer.innerHTML = '';
            }
        }

        // Function ng buttons
        document.getElementById('addBtn').addEventListener('click', () => callCalc('/calc/add'));
        document.getElementById('subBtn').addEventListener('click', () => callCalc('/calc/subtract'));
    </script>
</body>
</html>