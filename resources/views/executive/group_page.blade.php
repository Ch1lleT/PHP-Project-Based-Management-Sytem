@extends('/layout/layout')
@section('title', 'NIMT Grouping')
@section('header')
    <div class="fs-5">
        NIMT Grouping
    </div>
@endsection
@section('style')
    <style>
        * {
            margin: 0;
            padding: 0;
        }

        .tree ul {
            padding-top: 20px;
            position: relative;
            transition: all 0.5s;
            -webkit-transition: all 0.5s;
            -moz-transition: all 0.5s;
        }

        .tree li {
            float: left;
            text-align: center;
            list-style-type: none;
            position: relative;
            padding: 20px 5px 0 5px;
            transition: all 0.5s;
            -webkit-transition: all 0.5s;
            -moz-transition: all 0.5s;
        }

        .tree li::before,
        .tree li::after {
            content: '';
            position: absolute;
            top: 0;
            right: 50%;
            border-top: 1px solid #ccc;
            width: 50%;
            height: 20px;
        }

        .tree li:only-child::after,
        .tree li:only-child::before {
            display: none;
        }

        .tree li:only-child {
            padding-top: 0;
        }

        .tree ul ul::before {
            content: '';
            position: absolute;
            top: 0;
            border-left: 1px solid #ccc;
            width: 0;
            height: 20px;
        }

        .tree li a {
            border: 1px solid #ccc;
            padding: 5px 10px;
            text-decoration: none;
            color: #666;
            font-family: Arial, Verdana, Tahoma;
            font-size: 11px;
            display: inline-block;
            border-radius: 5px;
            -webkit-border-radius: 5px;
            -moz-border-radius: 5px;
            transition: all 0.5s;
            -webkit-transition: all 0.5s;
            -moz-transition: all 0.5s;
        }

        .tree li a:hover,
        .tree li a:hover+ul li a {
            background: #c8e4f8;
            color: #000;
            border: 1px solid #94a0b4;
        }

        .tree li a:hover+ul li::after,
        .tree li a:hover+ul li::before,
        .tree li a:hover+ul::before,
        .tree li a:hover+ul ul::before {
            border-color: #94a0b4;
        }

        .tree ul ul ul ul li a {
            position: relative;
            left: 50%;
            transform: translateX(-50%);
            padding: 5px 10px;
            text-decoration: none;
            color: #666;
            font-family: Arial, Verdana, Tahoma;
            font-size: 11px;
            border: 1px solid #ccc;
            border-radius: 5px;
            -webkit-border-radius: 5px;
            -moz-border-radius: 5px;
            transition: all 0.5s;
            -webkit-transition: all 0.5s;
            -moz-transition: all 0.5s;
            text-orientation: mixed !important;
            white-space: nowrap;
        }

        .tree ul ul ul {
            padding-top: 0;
        }

        .tree>ul>li>ul>li>ul>li {
            padding: 0 0 0 20px;
            display: flex;
            align-items: center;
            clear: left;
            position: relative;
            left: 50%;
        }

        .tree>ul>li>ul>li>ul>li::before {
            height: 100%;
        }

        .tree>ul>li>ul>li>ul>li:last-child::before {
            height: 50%;
        }

        .tree>ul>li>ul>li>ul>li>a {
            writing-mode: vertical-rl;
        }

        .tree ul ul ul li::before {
            width: 20px;
            left: 0;
            border-left: 1px solid #ccc;
            border-top: none;
        }

        .tree ul ul ul li:last-child::before {
            border-bottom: 1px solid #ccc;
            border-radius: 0 0 0 5px;
            -webkit-border-radius: 0 0 0 5px;
            -moz-border-radius: 0 0 0 5px;
        }

        .tree ul ul ul li::after {
            width: 20px;
            top: 50%;
            left: 0;
            border-left: 1px solid #ccc;
        }

        .tree ul ul ul ul {
            display: inline-block;
            padding: 0 0 0 20px;
        }

        .tree ul ul ul ul::before {
            border-left: none;
            border-top: 1px solid #ccc;
            width: 20px;
            left: 0;
            top: 50%;
        }

        .tree ul ul ul ul li {
            float: none;
            padding: 5px 0 5px 20px;
        }

        .tree ul ul ul ul li:first-child::before,
        .tree ul ul ul li:last-child::after {
            border: 0 none;
        }

        .tree ul ul ul ul li:first-child::after {
            border-radius: 5px 0 0 0;
            -webkit-border-radius: 5px 0 0 0;
            -moz-border-radius: 5px 0 0 0;
        }

        .toggle-btn {
            cursor: pointer;
            font-size: 0.8em;
            color: #007bff;
        }
    </style>
@endsection

@section('content')
    <div class="row">
        <div class="col-12 col-md-12" style="text-align: center;">
            <span>ใช้สำหรับแสดงภาพ Grouping ยุทธศาสตร์</span>
        </div>
    </div>



    <div class="tree">
        <ul>
            <li>
                <div class="node">
                    <a href="#" onclick="toggleVisibility(this)">Parent</a>
                    <span class="toggle-btn"></span>
                </div>
                <ul>
                    <li>
                        <div class="node">
                            <a href="#" onclick="toggleVisibility(this)">Child</a>
                            <span class="toggle-btn"></span>
                        </div>
                        <ul>
                            <li>
                                <div class="node">
                                    <a href="#" onclick="toggleVisibility(this)">Grand Child</a>
                                    <span class="toggle-btn"></span>
                                </div>
                                <ul>
                                    <li>
                                        <div class="node">
                                            <a href="#">Lorem ipsum dolor sit amet consectetur adipisicing elit. Rerum
                                                quam autem voluptatum quas aspernatur. Reprehenderit tempora quis fugiat et
                                                suscipit.</a>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="node">
                                            <a href="#">Lorem ipsum dolor sit amet consectetur adipisicing elit. Rerum
                                                quam autem voluptatum quas aspernatur. Reprehenderit tempora quis fugiat et
                                                suscipit.</a>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="node">
                                            <a href="#">Lorem ipsum dolor sit amet consectetur adipisicing elit. Rerum
                                                quam autem voluptatum quas aspernatur. Reprehenderit tempora quis fugiat et
                                                suscipit.</a>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="node">
                                            <a href="#">Lorem ipsum dolor sit amet consectetur adipisicing elit. Rerum
                                                quam autem voluptatum quas aspernatur. Reprehenderit tempora quis fugiat et
                                                suscipit.</a>
                                        </div>
                                    </li>
                                </ul>
                            </li>
                            <li>
                                <div class="node">
                                    <a href="#" onclick="toggleVisibility(this)">Grand Child</a>
                                    <span class="toggle-btn"></span>
                                </div>
                                <ul>
                                    <li>
                                        <div class="node">
                                            <a href="#">Lorem ipsum dolor sit amet consectetur adipisicing elit. Rerum
                                                quam autem voluptatum quas aspernatur. Reprehenderit tempora quis fugiat et
                                                suscipit.</a>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="node">
                                            <a href="#">Lorem ipsum dolor sit amet consectetur adipisicing elit. Rerum
                                                quam autem voluptatum quas aspernatur. Reprehenderit tempora quis fugiat et
                                                suscipit.</a>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="node">
                                            <a href="#">Lorem ipsum dolor sit amet consectetur adipisicing elit. Rerum
                                                quam autem voluptatum quas aspernatur. Reprehenderit tempora quis fugiat et
                                                suscipit.</a>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="node">
                                            <a href="#">Lorem ipsum dolor sit amet consectetur adipisicing elit. Rerum
                                                quam autem voluptatum quas aspernatur. Reprehenderit tempora quis fugiat et
                                                suscipit.</a>
                                        </div>
                                    </li>
                                </ul>
                            </li>
                            <li>
                                <div class="node">
                                    <a href="#" onclick="toggleVisibility(this)">Grand Child</a>
                                    <span class="toggle-btn"></span>
                                </div>
                                <ul>
                                    <li>
                                        <div class="node">
                                            <a href="#">Lorem ipsum dolor sit amet consectetur adipisicing elit. Rerum
                                                quam autem voluptatum quas aspernatur. Reprehenderit tempora quis fugiat et
                                                suscipit.</a>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="node">
                                            <a href="#">Lorem ipsum dolor sit amet consectetur adipisicing elit. Rerum
                                                quam autem voluptatum quas aspernatur. Reprehenderit tempora quis fugiat et
                                                suscipit.</a>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="node">
                                            <a href="#">Lorem ipsum dolor sit amet consectetur adipisicing elit. Rerum
                                                quam autem voluptatum quas aspernatur. Reprehenderit tempora quis fugiat et
                                                suscipit.</a>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="node">
                                            <a href="#">Lorem ipsum dolor sit amet consectetur adipisicing elit. Rerum
                                                quam autem voluptatum quas aspernatur. Reprehenderit tempora quis fugiat et
                                                suscipit.</a>
                                        </div>
                                    </li>
                                </ul>
                            </li>
                            <li>
                                <div class="node">
                                    <a href="#" onclick="toggleVisibility(this)">Grand Child</a>
                                    <span class="toggle-btn"></span>
                                </div>
                                <ul>
                                    <li>
                                        <div class="node">
                                            <a href="#">Lorem ipsum dolor sit amet consectetur adipisicing elit. Rerum
                                                quam autem voluptatum quas aspernatur. Reprehenderit tempora quis fugiat et
                                                suscipit.</a>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="node">
                                            <a href="#">Lorem ipsum dolor sit amet consectetur adipisicing elit. Rerum
                                                quam autem voluptatum quas aspernatur. Reprehenderit tempora quis fugiat et
                                                suscipit.</a>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="node">
                                            <a href="#">Lorem ipsum dolor sit amet consectetur adipisicing elit. Rerum
                                                quam autem voluptatum quas aspernatur. Reprehenderit tempora quis fugiat et
                                                suscipit.</a>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="node">
                                            <a href="#">Lorem ipsum dolor sit amet consectetur adipisicing elit. Rerum
                                                quam autem voluptatum quas aspernatur. Reprehenderit tempora quis fugiat et
                                                suscipit.</a>
                                        </div>
                                    </li>
                                </ul>
                            </li>
                            <li>
                                <div class="node">
                                    <a href="#" onclick="toggleVisibility(this)">Grand Child</a>
                                    <span class="toggle-btn"></span>
                                </div>
                                <ul>
                                    <li>
                                        <div class="node">
                                            <a href="#">Lorem ipsum dolor sit amet consectetur adipisicing elit. Rerum
                                                quam autem voluptatum quas aspernatur. Reprehenderit tempora quis fugiat et
                                                suscipit.</a>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="node">
                                            <a href="#">Lorem ipsum dolor sit amet consectetur adipisicing elit. Rerum
                                                quam autem voluptatum quas aspernatur. Reprehenderit tempora quis fugiat et
                                                suscipit.</a>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="node">
                                            <a href="#">Lorem ipsum dolor sit amet consectetur adipisicing elit. Rerum
                                                quam autem voluptatum quas aspernatur. Reprehenderit tempora quis fugiat et
                                                suscipit.</a>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="node">
                                            <a href="#">Lorem ipsum dolor sit amet consectetur adipisicing elit. Rerum
                                                quam autem voluptatum quas aspernatur. Reprehenderit tempora quis fugiat et
                                                suscipit.</a>
                                        </div>
                                    </li>
                                </ul>
                            </li>
                            <li>
                                <div class="node">
                                    <a href="#" onclick="toggleVisibility(this)">Grand Child</a>
                                    <span class="toggle-btn"></span>
                                </div>
                                <ul>
                                    <li>
                                        <div class="node">
                                            <a href="#">Lorem ipsum dolor sit amet consectetur adipisicing elit. Rerum
                                                quam autem voluptatum quas aspernatur. Reprehenderit tempora quis fugiat et
                                                suscipit.</a>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="node">
                                            <a href="#">Lorem ipsum dolor sit amet consectetur adipisicing elit. Rerum
                                                quam autem voluptatum quas aspernatur. Reprehenderit tempora quis fugiat et
                                                suscipit.</a>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="node">
                                            <a href="#">Lorem ipsum dolor sit amet consectetur adipisicing elit. Rerum
                                                quam autem voluptatum quas aspernatur. Reprehenderit tempora quis fugiat et
                                                suscipit.</a>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="node">
                                            <a href="#">Lorem ipsum dolor sit amet consectetur adipisicing elit. Rerum
                                                quam autem voluptatum quas aspernatur. Reprehenderit tempora quis fugiat et
                                                suscipit.</a>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="node">
                                            <a href="#">Lorem ipsum dolor sit amet consectetur adipisicing elit. Rerum
                                                quam autem voluptatum quas aspernatur. Reprehenderit tempora quis fugiat et
                                                suscipit.</a>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="node">
                                            <a href="#">Lorem ipsum dolor sit amet consectetur adipisicing elit. Rerum
                                                quam autem voluptatum quas aspernatur. Reprehenderit tempora quis fugiat et
                                                suscipit.</a>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="node">
                                            <a href="#">Lorem ipsum dolor sit amet consectetur adipisicing elit. Rerum
                                                quam autem voluptatum quas aspernatur. Reprehenderit tempora quis fugiat et
                                                suscipit.</a>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="node">
                                            <a href="#">Lorem ipsum dolor sit amet consectetur adipisicing elit. Rerum
                                                quam autem voluptatum quas aspernatur. Reprehenderit tempora quis fugiat et
                                                suscipit.</a>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="node">
                                            <a href="#">Lorem ipsum dolor sit amet consectetur adipisicing elit. Rerum
                                                quam autem voluptatum quas aspernatur. Reprehenderit tempora quis fugiat et
                                                suscipit.</a>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="node">
                                            <a href="#">Lorem ipsum dolor sit amet consectetur adipisicing elit. Rerum
                                                quam autem voluptatum quas aspernatur. Reprehenderit tempora quis fugiat et
                                                suscipit.</a>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="node">
                                            <a href="#">Lorem ipsum dolor sit amet consectetur adipisicing elit. Rerum
                                                quam autem voluptatum quas aspernatur. Reprehenderit tempora quis fugiat et
                                                suscipit.</a>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="node">
                                            <a href="#">Lorem ipsum dolor sit amet consectetur adipisicing elit.
                                                Rerum
                                                quam autem voluptatum quas aspernatur. Reprehenderit tempora quis fugiat et
                                                suscipit.</a>
                                        </div>
                                    </li>
                                </ul>
                            </li>
                        </ul>
                    </li>
                </ul>
            </li>
        </ul>
    </div>

    <script>
        function toggleVisibility(button) {
            const parentNode = button.closest('li');
            const subList = parentNode.querySelector('ul');
            if (subList) {
                if (subList.style.display === 'none') {
                    subList.style.display = 'block';
                    // button.textContent = '[–]';
                } else {
                    subList.style.display = 'none';
                    // button.textContent = '[+]';
                }
            }
        }

        document.querySelectorAll('.toggle-btn').forEach(btn => {
            const subList = btn.closest('li').querySelector('ul');
            if (subList) subList.style.display = 'none';
        });
    </script>
@endsection
