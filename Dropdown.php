<style>
    .dropbtn {
        background-color: #fff;
        color: #000;
        padding: 16px;
        /* font-weight: bold; */
        /* font-size: 16px; */
        border: none;
        cursor: pointer;
    }

    .dropbtn:hover {
        color: #7E0CF5
    }

    .dropdown {
        position: relative;
        display: inline-block;
    }

    .dropdown-content {
        display: none;
        position: absolute;
        padding: 5px;
        background-color: #fff;
        min-width: 160px;
        box-shadow: 0px 8px 16px 0px rgba(0, 0, 0, 0.2);
        z-index: 1;
    }

    .dropdown-content a {
        color: #7E0CF5;
        padding: 12px 16px;
        text-decoration: none;
        display: block;
    }

    .dropdown-content a:hover {
        background-color: #fff
    }

    .dropdown:hover .dropdown-content {
        display: block;
    }

    .dropdown:hover .dropbtn {
        background-color: #fff;
    }
</style>