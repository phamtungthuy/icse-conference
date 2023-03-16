<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
    <title><?php get_the_title_rss(); ?></title>
    <style type="text/css">
        .style40 {
            font-size: 24px
        }
    </style>
    <?php wp_head(); ?>
    <style type="text/css">
        .style41 {
            color: #FF9900
        }
    </style>
</head>

<body bgcolor="#990000" background="mm_bg_red.gif"><!-- #BeginLibraryItem "/Library/header.lbi" -->
    <meta NAME="author" CONTENT="Hausi A. Muller">
    <meta NAME="description" CONTENT="ICSE Homepage">
    <meta NAME="description" CONTENT="ICSE: ACM IEEE International Conference on Software Engineering">
    <meta NAME="keywords" CONTENT="ICSE, Software Engineering, sponsors, IEEE, IEEE TCSE, IEEE Computer Society, ACM, ACM SIGSOFT, ICSE 2026, ICSE 2025, ICSE 2024, ICSE 2023, ICSE 2022, ICSE 2021, ICSE 2020, ICSE 2019, ICSE 2018, ICSE 2017, ICSE 2016, ICSE 2015, ICSE 2014, ICSE 2013, ICSE 2012, ICSE 2011, ICSE 2010, ICSE 2009, ICSE 2008, ICSE 2007, ICSE 2006, ICSE 2005, ICSE 2004, ICSE 2003, ICSE 2002, ICSE 2001, ICSE 11, ICSE 10, ICSE 09, ICSE 08, ICSE 07, ICSE 06, ICSE 05, ICSE 04, ICSE 03, ICSE 02, ICSE 01, proceedings, bibliography, history, corporate knowledge, secretariat, steering committee, most influential paper, organization, final reports">

    <style type="text/css">
        .style66 {
            font-family: Calibri, Helvetica, Arial, sans-serif;
            color: #FF8000;
            /*#FFD214;*/
            font-size: large;
            font-weight: bold;
            letter-spacing: .1em;
        }

        .style66-32 {
            font-family: Calibri, Helvetica, Arial, sans-serif;
            color: #FF8000;
            /*#FFD214;*/
            font-size: x-large;
            font-weight: bold;
            letter-spacing: .2em;
        }

        .style66-48 {
            font-family: Calibri, Helvetica, Arial, sans-serif;
            color: #FF8000;
            /*#FFD214;*/
            font-size: xx-large;
            font-weight: bold;
            letter-spacing: .3em;

        }

        .auto-style1 {
            vertical-align: middle;
            border-width: 0px;
        }
    </style>
    <table width="100%" border="0" cellspacing="0" cellpadding="0">
        <tr bgcolor="#220103">
            <td rowspan="2" width="186" nowrap="nowrap">
                <center>
                    <img src="<?php echo get_stylesheet_directory_uri()?>/images/ICSE-logo-glow-sharp.jpg" alt="ICSE-logo-glow-sharp" height="192" border="0" align="middle" />
                </center>
            </td>
            <td rowspan="2" width="50" nowrap="nowrap"></td>
            <td min-width="280" height="55" nowrap="nowrap" id="ICSE text" valign="bottom">
                <strong>
                    <h1 class="style66-48">ICSE</h1>
                </strong>
            </td>
            <td rowspan="2" width="50" nowrap="nowrap"></td>
            <td rowspan="2" width="254" nowrap="nowrap">
                <table>
                    <tr>
                        <td><img src="<?php echo get_stylesheet_directory_uri()?>/images/2009ACM3.jpg" alt="2009ACM3" width="250" height="96"></td>
                    </tr>
                    <tr>
                        <td><img src="<?php echo get_stylesheet_directory_uri()?>/images/2009IEEECS3.jpg" alt="2009IEEECS3" width="250" height="96" border="0" /></td>
                    </tr>
                </table>
            </td>
            <td width="4" rowspan="2" nowrap="nowrap">
                <table>
                    <tr>
                        <td><img src="<?php echo get_stylesheet_directory_uri()?>/images/2009SIGSOFT3.jpg" alt="2009SIGSOFT3" width="250" height="96"></td>
                    </tr>
                    <tr>
                        <td><img src="<?php echo get_stylesheet_directory_uri()?>/images/2009TCSE3.jpg" alt="2009TCSE3" width="250" height="96"></td>
                    </tr>
                </table>
            </td>
            <td width="140" rowspan="2">&nbsp;</td>
        </tr>
        <tr bgcolor="#220103">
            <td min-width="280" height="54" valign="top" nowrap="nowrap" bgcolor="#220103" id="tagline">
                <h2 class="style66-32">International Conference<br>
                    on Software Engineering&#174;</h2>
            </td>
        </tr>
        <tr bgcolor="#FF9900">
            <td colspan="7"><img src="images/mm_spacer.gif" alt="" width="1" height="1" border="0" /></td>
        </tr>
        <tr bgcolor="#FF080E">
            <td colspan="7"><img src="images/mm_spacer.gif" alt="" width="1" height="2" border="0" /></td>
        </tr>
        <tr bgcolor="#FF9900">
            <td colspan="7"><img src="images/mm_spacer.gif" alt="" width="1" height="1" border="0" /></td>
        </tr>
        <tr bgcolor="#FF080E">
            <td colspan="7"><img src="images/mm_spacer.gif" alt="" width="1" height="18" border="0" /></td>
        </tr>
        <tr bgcolor="#FF9900">
            <td colspan="7"><img src="images/mm_spacer.gif" alt="" width="1" height="1" border="0" /></td>
        </tr>
        <tr bgcolor="#FF080E">
            <td colspan="7"><img src="images/mm_spacer.gif" alt="" width="1" height="2" border="0" /></td>
        </tr>
        <tr bgcolor="#FF9900">
            <td colspan="7"><img src="images/mm_spacer.gif" alt="" width="1" height="1" border="0" /></td>
        </tr>
    </table>
    <!-- #EndLibraryItem -->
    <table border="0" cellspacing="0" cellpadding="0">
        <tr>
            <td width="140" valign="top" bgcolor="#220103" id="navborder"><!-- #BeginLibraryItem "/Library/menu.lbi" -->
                <link rel="stylesheet" href="Library/icse-css.css" type="text/css" />
                <table border="0" cellspacing="0" cellpadding="0" width="186" id="navigation">
                <?php 
                         $menu_name = 'menu';
                         $menu_object = wp_get_nav_menu_object($menu_name);
                         $menu_items = wp_get_nav_menu_items($menu_object->term_id);
                         
                         
                         if(!empty($menu_items)) {
                           foreach( $menu_items as $menu_item) {
                             if ($menu_item->menu_item_parent == 0) {
                               echo '<tr>
                                    <td width="186" valign = "middle"><a href ="' . $menu_item->url . '" class ="navText">' . $menu_item->title . '</a><</td>
                               </tr>';
                             }
                           }
                         }
                    ?>
                    <tr>
                        <td>&nbsp;<br>&nbsp;<br></td>
                    </tr>
                    <tr>
                        <td width="186">
                            <center>
                                <a href="contact.html#maintainer" class="navText">
                                    Last update<br />
                                    Oct 2022</a>
                            </center>
                        </td>
                    </tr>
                </table>

                <!-- #EndLibraryItem -->
            </td>
            <td width="50"><img src="mm_spacer.gif" alt="" width="50" height="1" border="0" /></td>