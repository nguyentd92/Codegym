<style>
#content {
    width: 450px;
    margin: 0 auto;
    padding: 0px 20px 20px;
    background: white;
    border: 2px solid navy;
}

h1 {
    color: navy;
}

label {
    width: 10em;
    padding-right: 1em;
    float: left;
}

#data input {
    float: left;
    width: 15em;
    margin-bottom: .5em;
}

#buttons input {
    float: left;
    margin-bottom: .5em;
}

br {
    clear: left;
}
</style>

<body>
    <div id="content">
        <h1>Translate</h1>
        <form method="post" action="/translate">
        @csrf
            <div id="data">
                <label>Word</label>
                <input type="text" name="word_input" /><br />
            </div>
            <div id="data">
                <label>Result</label>
                <span>{{ $result }}</span>
            </div>
            <div id="buttons">
                <label>&nbsp;</label>
                <input type="submit" value="Translate" />
            </div>
        </form>
    </div>
</body>