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
        <label>Product Description: </label>
        <span>Coke</span><br />
        <label>Price: </label>
        <span>${{ $price }}</span><br />
        <label>Discount Percent: </label>
        <span>{{ $discountPercent }}%</span><br />
        <label>Discount Amount: </label>
        <span>${{ $discountAmount }}</span><br />
        <label>Discount Price: </label>
        <span>${{ $discountPrice }}</span><br />
    </div>
</body>

</html>