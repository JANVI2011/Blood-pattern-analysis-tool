<h1>Blood Detection AI</h1>

<form method="GET" action="/">
    <label>Glucose:</label>
    <input type="text" name="glucose"><br><br>

    <label>BMI:</label>
    <input type="text" name="bmi"><br><br>

    <label>Age:</label>
    <input type="text" name="age"><br><br>

    <button type="submit">Predict</button>
</form>

@if(isset($result))
    <h2>Prediction: {{ $result }}</h2>
@endif
