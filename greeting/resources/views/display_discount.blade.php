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
        <h1>Product Discount Calculator</h1>
        <form method="post" action="/display_discount">
        @csrf
            <div id="data">
                <label>Product Description:</label>
                <input type="text" name="productdescription" /><br />
                <label>List Price:</label>
                <input type="text" name="listprice" /><br />
                <label>Discount Percent:</label>
                <input type="text" name="discountpercent" />(%)<br />
            </div>
            <div id="buttons">
                <label>&nbsp;</label>
                <input type="submit" value="Calculate Discount" />
            </div>
        </form>
    </div>
</body>