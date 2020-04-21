<style>
        *{
            box-sizing: border-box;
            font-family: 'Noto Sans TC', sans-serif;
        }
        body{
            font-family: 'Noto Sans TC', sans-serif;
        }
        /* --------------字形自己放!!!!!!!!!!!!--------------
        https://www.cufonfonts.com/font/lucida-sans

        1.放字形
        2.放font-face語法
        3.將font-family放在要下的地方
        
        ex.
        .header{ font-family: 'Lucida Sans Italic'; } 
        
        */
        @font-face {
            font-family: 'Lucida Sans Italic';
            font-style: normal;
            font-weight: normal;
            src: local('Lucida Sans Italic'), url('./font/LSANSI.TTF') format('woff');
        }
        @font-face {
            font-family: 'Lucida Sans Demibold Roman';
            font-style: normal;
            font-weight: normal;
            src: local('Lucida Sans Demibold Roman'), url('./font/LSANSI.TTF') format('woff');
        }
        /* --------------字形自己放!!!!!!!!!!!!-------------- */
        dl,ol,ul,li{
            list-style: none;
            padding: 0;
            margin: 0;
        }
        .header a,
        .header img,
        .footer a,
        .foot img{
            cursor: pointer;
        }
        .transition{
            transition:all .5s;
            -webkit-transition: all .5s;
        }
        .wrapper{
            max-width: 1440px;
            margin: 0 auto;
        }
        .object_fit{
            width: 100%;
            height: 100%;
            object-fit: cover;
            overflow: hidden;
        }

    /* header */
        .header{
            box-shadow: 0 0 5px #ccc;
            background: #fff;
            font-size: 20px;
        }
        .header .nav{
            /* header 高度 */
            height: 120px;
            display: flex;
            justify-content: space-between;
        }
        .header_nav_left{
            display: flex;
            align-items: center;
        }
        .header .logo{
            padding: 0 40px;
        }
        .header_nav_left li{
            margin: 0 2vw;
        }
        .header_nav_right{
            display: flex;
            align-items: center;
        }
        .header_nav_right img{
            margin: 0 20px;
        }
        .header .menu{
            display: none;
        }
        .header .bar{
            width: 30px;
            height: 4px;
            background: rgb(58, 58, 58);
            margin: 5px 0 0 30px;
            border-radius: 2px;
        }
        .header_nav_right li:hover .sub_nav{
            max-height: 300px;
        }
        .header nav ul li a:hover{
            background: #FFE07C;
        }
        .header .sub_nav{
            position: absolute;
            background: rgb(255, 255, 255);
            top: 77px;
            width: 132px;
            max-height: 0;
            overflow: hidden;
        }
        .header .sub_nav a{
            padding:8px 20px;
            display: block;
        }
        .header .rwd_sub_nav{
            display: none;
        }
        @media all and (max-width: 360px) {
            .wrapper{
                /* 360px - 30px(左右邊框) */
                width: 330px;
            }
            .header .nav{
                height: 60px;
            }
            .header .logo{
                padding: 0;
            }
            .header .logo img{
                width: 40px;
            }
            .header_nav_left li{
                display: none;
            }
            .header_nav_right img{
                width: 15px;
                margin: 0 10px;
            }
            .header .sub_nav{
                display: none;
            }
            .header .active .rwd_sub_nav{
                max-height: 300px;                
            }
            .header .rwd_sub_nav{
                display: block;
                position: absolute;
                background: rgb(255, 255, 255);
                font-size: 15px;
                top: 60px;
                right: 0;
                width: 132px;
                max-height: 0;
                overflow: hidden;
                /* z-index: -1; */
            }
            .header .rwd_sub_nav a{
                padding:8px 20px;
                display: block;
            }
            /* 漢堡選單 */
            .header .menu{
                display: block;                
            }
            .header .bar{
                width: 20px;
                height: 3px;
                margin: 4px 0 0 20px;
            }            
            .active .bar1{
                -webkit-transform: rotate(-45deg) translate(-5px, 5px) ;
                transform: rotate(-45deg) translate(-5px, 5px) ;
            }
            .active .bar2{
                opacity: 0;
            }
            .active .bar3{
                -webkit-transform: rotate(45deg) translate(-5px, -5px) ;
                transform: rotate(45deg) translate(-5px, -5px) ;
            }
        }

    /* footer */
        .footer{
            height: 415px;
            padding-top: 60px;
            background: #CA054D;
            color: #fff;
            font-size: 20px;
        }
        .footer .block_1{
            display: flex;
            justify-content: space-between;
        }        
        .footer .title{
            /* 蓋過 footer 裡的 font-size */
            font-size: 25px;
            padding-bottom: 25px;
        }
        .footer .block_1_1 li,
        .footer .block_1_2 li{
            padding-bottom: 10px;
        }
        .footer hr{
            width: 1440px;
            border: 1px solid #fff;
            color: #fff;
            margin: 50px auto 25px ;
        }
        .footer .map{
            height: 200px;
            width: 500px;
            background: #fff;
        }
        .footer .block_2{
            display: flex;
        }
        .footer .block_2 img{
            margin-right: 50px;
        }
        .footer .rwd_map{
            display: none;
        }
        @media all and (max-width: 360px) {
            .wrapper{
                width: 300px;
            }
            .footer{
                height: 550px;
                padding-top: 20px;
                background: #CA054D;
                color: #fff;
                font-size: 15px;
            }
            .footer div:first-child{
                display: block;
            }
            .footer .title{
                /* 蓋過 footer 裡的 font-size */
                font-size: 20px;
                padding: 15px 0;
            }       
            .footer .block_1_1 li,
            .footer .block_1_2 li{
                padding-bottom: 10px;
            }
            .footer .block_1_2 img{
                margin-right: 5px;
            }
            .footer .block_2{
                display: block;
            }
            .footer .block_2 div:first-child img{
                margin-right: 20px;
                height: 20px;
            }
            .footer .block_1_3{
                display: none;
            }
            .footer hr{
                width: 330px;
                margin: 25px 15px 20px ;
            }
            .footer .rwd_map{
                width: 100%;
                display: block;
                margin: 10px 0;
            }
        }
    </style>