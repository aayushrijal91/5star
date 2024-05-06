<?php $list = array(
    "studio-design" => "Studio Design",
    "custom-built-granny-flats" => "Granny Flats",
    "1-bedroom-granny-flat" => "1 Bedroom",
    "2-bedroom-granny-flats" => "2 Bedroom",
    "3-bedroom-granny-flats" => "3 Bedroom"
);
$countNav = 0;
$countList = 0;
?>

<section class="unitType">
    <div class="container">
        <div class="col-xl-9 mx-auto bg-light rounded-20">
            <ul class="unitTypeNav">
                <?php foreach ($list as $key => $li) : ?>
                    <li>
                        <button data-target="#unit-<?= $key ?>" class="unitTypeNavBtn fw-700 <?= $countNav++ == 0 ? "active" : "" ?>">
                            <?php if ($key == "studio-design") : ?>
                                <svg width="33" height="30" viewBox="0 0 33 30" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path fill-rule="evenodd" clip-rule="evenodd" d="M12.4466 0.537056C12.3729 0.551872 12.2604 0.621635 12.1966 0.692086C12.0859 0.814422 12.0799 1.06609 12.0626 6.33028C12.0527 9.36086 12.0612 11.9334 12.0817 12.0471C12.1022 12.1607 12.1736 12.3084 12.2405 12.3752C12.3595 12.4943 12.5186 12.4968 20.0187 12.4968C27.5592 12.4968 27.6772 12.4949 27.7988 12.3733C27.8667 12.3054 27.9378 12.1859 27.9569 12.1076C27.9761 12.0294 27.9838 9.45556 27.9741 6.38798L27.9566 0.810483L27.8144 0.668144C27.6759 0.529555 27.6339 0.525242 26.2441 0.505988C25.0825 0.48986 24.7742 0.503675 24.5916 0.580002C24.3474 0.682022 24.2573 0.877684 24.3269 1.15499C24.3918 1.41385 24.6858 1.49468 25.5621 1.49468H26.3279L25.9253 1.901L25.5226 2.30733H20.0187H14.5148L14.1133 1.90219L13.7118 1.49705L18.3863 1.48024L23.061 1.46342L23.2118 1.28801C23.4022 1.06666 23.4022 0.922505 23.2118 0.70115L23.061 0.525742L17.8209 0.517928C14.9388 0.513615 12.5204 0.522241 12.4466 0.537056ZM13.4698 2.57119L13.8621 2.96008V6.4955V10.0309L13.4246 10.4651L12.987 10.8993V6.54082C12.987 4.14362 13.0074 2.18231 13.0322 2.18231C13.0571 2.18231 13.254 2.35734 13.4698 2.57119ZM27.0503 6.54082V10.8993L26.6128 10.4651L26.1753 10.0309V6.499V2.96708L26.5641 2.57469C26.778 2.3589 26.9749 2.18231 27.0016 2.18231C27.0285 2.18231 27.0503 4.14362 27.0503 6.54082ZM1.97899 2.4953C1.92337 2.52781 1.8468 2.63246 1.80886 2.72779C1.73261 2.91963 0.111328 9.99961 0.111328 10.1409C0.111328 10.1896 0.169644 10.3036 0.240898 10.3942L0.370405 10.5589H2.17851H3.98654V18.6854V26.812H3.77928C2.58203 26.812 1.66391 27.5273 1.49734 28.5898C1.4299 29.0198 1.46109 29.2076 1.62447 29.3556C1.73992 29.4602 1.94162 29.4702 4.28994 29.4877C5.6872 29.4982 6.92346 29.4896 7.03709 29.4686C7.35804 29.4094 7.48674 29.2397 7.48674 28.8756C7.48674 28.2858 7.13434 27.6093 6.64369 27.2568C6.27942 26.9952 5.9334 26.879 5.37931 26.8321L4.92366 26.7936L4.93947 18.6919L4.95535 10.5902H5.54913H6.14291L6.15917 13.3523L6.17548 16.1144L6.33949 16.2435C6.42974 16.3144 6.54062 16.3725 6.58594 16.3725C6.7512 16.3725 6.97459 16.23 7.04234 16.0814C7.08972 15.9773 7.11172 15.0786 7.11172 13.244V10.5589H7.82357C8.63324 10.5589 8.82075 10.4813 8.81938 10.1467C8.819 10.0468 8.44692 8.33348 7.99258 6.33935C7.25516 3.10267 7.14978 2.69859 7.01065 2.57301L6.8547 2.43235L4.46745 2.43423C3.08374 2.43535 2.03762 2.46098 1.97899 2.4953ZM25.2231 5.01653C25.2322 5.97365 25.2171 6.74724 25.1895 6.73561C25.1619 6.72392 24.8346 6.38292 24.4623 5.97772C24.09 5.57245 23.6973 5.19413 23.5896 5.13693C23.3125 4.98965 22.7079 4.99478 22.4011 5.14706C22.2396 5.2272 21.718 5.7563 20.8414 6.72898C19.5847 8.12356 19.52 8.18482 19.4278 8.06792C19.0069 7.53432 17.8488 6.33541 17.6617 6.23945C17.3854 6.0978 16.8851 6.08317 16.5863 6.20807C16.4584 6.26152 16.0764 6.62715 15.6039 7.1485L14.8309 8.00148L14.8145 5.7016C14.8055 4.43674 14.8116 3.36634 14.8283 3.32302C14.8523 3.26039 15.9178 3.24757 20.0325 3.26026L25.2065 3.27626L25.2231 5.01653ZM6.36168 3.40579C6.36168 3.42548 6.67107 4.79412 7.04921 6.44724C7.42736 8.10031 7.73675 9.49076 7.73675 9.53702C7.73675 9.60653 7.16378 9.62122 4.45113 9.62122C1.35152 9.62122 1.16726 9.61503 1.19714 9.51182C1.21451 9.45163 1.51322 8.15063 1.86086 6.62065C2.20844 5.09067 2.52065 3.73341 2.55459 3.60445L2.61628 3.37003H4.48901C5.51894 3.37003 6.36168 3.38616 6.36168 3.40579ZM18.9191 3.95308C18.7676 4.03303 18.5592 4.21832 18.4561 4.36478C18.2868 4.60521 18.2686 4.67803 18.2686 5.11549C18.2686 5.54676 18.2882 5.62821 18.4475 5.85813C18.674 6.18507 19.1503 6.43368 19.5465 6.43174C20.2463 6.42836 20.8618 5.81475 20.8618 5.12037C20.8618 4.14787 19.7806 3.49818 18.9191 3.95308ZM19.8276 4.88426C19.9586 5.07123 19.9501 5.2202 19.7999 5.37041C19.5578 5.61258 19.1749 5.45618 19.1749 5.11511C19.1749 4.76117 19.6289 4.60052 19.8276 4.88426ZM23.2292 6.04242C23.3009 6.10261 23.7811 6.61596 24.2964 7.18326L25.2332 8.2147L25.2354 8.98047L25.2377 9.74624H23.0878H20.9379L20.554 9.31322L20.1701 8.8802L21.3654 7.54726C22.0229 6.81412 22.6303 6.151 22.7152 6.07367C22.9007 5.9047 23.0539 5.89539 23.2292 6.04242ZM18.4814 8.41787L19.6794 9.74624H17.2395H14.7996V9.59272C14.7996 9.48195 15.0988 9.10681 15.8739 8.24565C16.8149 7.20007 16.969 7.05436 17.1158 7.0708C17.2447 7.08518 17.5602 7.39642 18.4814 8.41787ZM25.894 11.1215L26.3282 11.5591H20.0187H13.7092L14.1434 11.1215L14.5775 10.6839H20.0187H25.4599L25.894 11.1215ZM11.941 15.5312C10.8431 15.8269 10.0069 16.7296 9.80462 17.8374C9.76737 18.0414 9.73687 18.6189 9.73687 19.1206V20.0329L9.32828 20.2109C8.801 20.4407 8.40735 20.8259 8.15465 21.3594L7.95552 21.7798L7.93751 25.4462L7.91958 29.1125L8.07277 29.2906L8.22597 29.4687H15.6434H23.0609L23.2118 29.2933C23.4022 29.072 23.4022 28.9278 23.2118 28.7065L23.061 28.5311L17.774 28.5144L12.487 28.4977V26.7484V24.9991H20.0187H27.5504V26.7495V28.4998H26.1733C24.6486 28.4998 24.4007 28.5454 24.3269 28.8395C24.2584 29.1125 24.3477 29.3126 24.5816 29.4104C24.7591 29.4845 25.3854 29.5 28.2006 29.5C30.4048 29.5 31.6652 29.4771 31.7758 29.4351C32.1204 29.304 32.109 29.4356 32.1111 25.5829C32.113 22.2576 32.105 21.9835 31.9955 21.632C31.7826 20.9476 31.2724 20.415 30.5749 20.1485L30.3005 20.0437L30.2969 19.0364C30.2928 17.87 30.2014 17.4107 29.8614 16.845C29.6062 16.4205 29.1452 15.9851 28.7262 15.7727C28.0457 15.4278 28.1871 15.4348 21.917 15.4348C18.73 15.4348 16.0748 15.4531 16.0167 15.4755C15.8573 15.5366 15.7382 15.8669 15.8086 16.0521C15.9343 16.3829 15.6583 16.3684 21.8668 16.3705C28.2982 16.3728 28.0008 16.3539 28.5817 16.7958C28.8081 16.9681 28.9544 17.1517 29.1129 17.4624L29.3317 17.8912L29.3533 18.9654L29.375 20.0396L28.999 20.1767C28.515 20.3532 28.0701 20.7538 27.7956 21.2601L27.5816 21.6548L27.5612 22.8584L27.5408 24.062L20.0295 24.0461L12.5183 24.0302L12.4856 22.8425C12.4556 21.748 12.4411 21.6302 12.3009 21.3422C12.0636 20.8546 11.527 20.3549 11.0566 20.1834L10.6624 20.0396L10.684 18.9654L10.7057 17.8912L10.9244 17.4624C11.0818 17.154 11.2286 16.9691 11.4473 16.804C11.9352 16.4356 12.2243 16.3725 13.4233 16.3725C14.3879 16.3725 14.4833 16.3623 14.635 16.2429C14.8502 16.0736 14.8595 15.7629 14.655 15.5707C14.5172 15.4413 14.4572 15.435 13.3893 15.439C12.633 15.4417 12.1617 15.4717 11.941 15.5312ZM10.8832 21.139C11.0231 21.2164 11.2233 21.4016 11.328 21.5507L11.5182 21.8217L11.5354 25.1607L11.5527 28.4998H10.2072H8.86182L8.86219 25.3273C8.86238 23.2662 8.88594 22.0705 8.92938 21.9139C8.9662 21.7813 9.11052 21.549 9.25009 21.3976C9.68042 20.9307 10.3226 20.829 10.8832 21.139ZM30.2188 21.0297C30.5982 21.1424 31.0065 21.5484 31.108 21.9139C31.1514 22.0705 31.175 23.2662 31.1752 25.3273L31.1756 28.4998H29.8317H28.4879V25.2377C28.4879 22.0503 28.4909 21.9693 28.6193 21.7041C28.766 21.401 29.0571 21.1509 29.4097 21.0251C29.7155 20.9159 29.838 20.9166 30.2188 21.0297ZM5.86165 27.8678C6.05635 27.9733 6.35311 28.2453 6.43174 28.3904C6.48768 28.4936 6.37662 28.4998 4.4872 28.4998H2.48327L2.57253 28.3279C2.68916 28.1032 2.98661 27.8881 3.28169 27.8149C3.64884 27.7238 5.67258 27.7653 5.86165 27.8678Z" fill="currentColor" />
                                </svg>
                            <?php elseif ($key == "custom-built-granny-flats") : ?>
                                <svg width="27" height="26" viewBox="0 0 27 26" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <g clip-path="url(#clip0_362_358)">
                                        <path d="M26.0096 5.58554C26.0096 5.58554 22.2458 0.576248 22.2426 0.572479C21.9524 0.208679 21.5188 0 21.053 0H12.502C12.2215 0 11.9941 0.227325 11.9941 0.507812C11.9941 0.7883 12.2215 1.01562 12.502 1.01562H21.053C21.206 1.01562 21.3486 1.08307 21.445 1.2011L24.5867 5.38281H17.6961L15.5621 2.25302C15.4675 2.11436 15.3106 2.03125 15.1426 2.03125H11.0801C10.9121 2.03125 10.7552 2.11436 10.6605 2.25302L8.52654 5.38281H1.63596L4.77785 1.2011C4.87425 1.08307 5.01668 1.01562 5.16962 1.01562H8.43945C8.71994 1.01562 8.94727 0.7883 8.94727 0.507812C8.94727 0.227325 8.71994 0 8.43945 0H5.16962C4.70386 0 4.27023 0.208679 3.98003 0.572479C3.97685 0.576248 0.213089 5.58554 0.213089 5.58554C0.150009 5.66965 0.111328 5.78133 0.111328 5.89062V7.92188C0.111328 8.20236 0.338654 8.42969 0.619141 8.42969H1.12695V23.0404C0.535828 23.2501 0.111328 23.8146 0.111328 24.4766V25.4922C0.111328 25.7727 0.338654 26 0.619141 26H25.6035C25.884 26 26.1113 25.7727 26.1113 25.4922V24.4766C26.1113 23.8146 25.6868 23.2501 25.0957 23.0404V8.42969H25.6035C25.884 8.42969 26.1113 8.20236 26.1113 7.92188V5.89062C26.1113 5.78053 26.0726 5.66965 26.0096 5.58554ZM8.54102 8.42969V22.9531H2.14258V8.42969H8.54102ZM16.666 8.42969V14.5234H9.55664V8.42969H16.666ZM15.6504 22.9531V19.0938C15.6504 18.8133 15.4231 18.5859 15.1426 18.5859H11.0801C10.7996 18.5859 10.5723 18.8133 10.5723 19.0938V22.9531H9.55664V17.5703H16.666V22.9531H15.6504ZM11.5879 22.9531V19.6016H14.6348V22.9531H11.5879ZM16.666 16.5547H9.55664V15.5391H16.666V16.5547ZM25.0957 24.9844H1.12695V24.4766C1.12695 24.1965 1.35468 23.9688 1.63477 23.9688H24.5879C24.868 23.9688 25.0957 24.1965 25.0957 24.4766V24.9844ZM24.0801 22.9531H17.6816V8.42969H24.0801V22.9531ZM25.0957 7.41406H1.12695V6.39844H8.79492C8.96294 6.39844 9.11984 6.31532 9.21446 6.17667L11.3485 3.04688H14.8742L17.0082 6.17667C17.1028 6.31532 17.2597 6.39844 17.4277 6.39844H25.0957V7.41406Z" fill="currentColor" />
                                        <path d="M11.0801 13.5078H15.1426C15.4231 13.5078 15.6504 13.2805 15.6504 13V9.95312C15.6504 9.67264 15.4231 9.44531 15.1426 9.44531H11.0801C10.7996 9.44531 10.5723 9.67264 10.5723 9.95312V13C10.5723 13.2805 10.7996 13.5078 11.0801 13.5078ZM11.5879 10.4609H14.6348V12.4922H11.5879V10.4609Z" fill="currentColor" />
                                        <path d="M19.3574 13.5078H22.4043C22.6848 13.5078 22.9121 13.2805 22.9121 13V9.95312C22.9121 9.67264 22.6848 9.44531 22.4043 9.44531H19.3574C19.0769 9.44531 18.8496 9.67264 18.8496 9.95312V13C18.8496 13.2805 19.0769 13.5078 19.3574 13.5078ZM19.8652 10.4609H21.8965V12.4922H19.8652V10.4609Z" fill="currentColor" />
                                        <path d="M3.81836 13.5078H6.86523C7.14572 13.5078 7.37305 13.2805 7.37305 13V9.95312C7.37305 9.67264 7.14572 9.44531 6.86523 9.44531H3.81836C3.53787 9.44531 3.31055 9.67264 3.31055 9.95312V13C3.31055 13.2805 3.53787 13.5078 3.81836 13.5078ZM4.32617 10.4609H6.35742V12.4922H4.32617V10.4609Z" fill="currentColor" />
                                        <path d="M19.3574 20.6172H22.4043C22.6848 20.6172 22.9121 20.3899 22.9121 20.1094V17.0625C22.9121 16.782 22.6848 16.5547 22.4043 16.5547H19.3574C19.0769 16.5547 18.8496 16.782 18.8496 17.0625V20.1094C18.8496 20.3899 19.0769 20.6172 19.3574 20.6172ZM19.8652 17.5703H21.8965V19.6016H19.8652V17.5703Z" fill="currentColor" />
                                        <path d="M3.81836 20.6172H6.86523C7.14572 20.6172 7.37305 20.3899 7.37305 20.1094V17.0625C7.37305 16.782 7.14572 16.5547 6.86523 16.5547H3.81836C3.53787 16.5547 3.31055 16.782 3.31055 17.0625V20.1094C3.31055 20.3899 3.53787 20.6172 3.81836 20.6172ZM4.32617 17.5703H6.35742V19.6016H4.32617V17.5703Z" fill="currentColor" />
                                        <path d="M9.96289 0.507812C9.96289 0.788101 10.1904 1.01562 10.4707 1.01562C10.751 1.01562 10.9785 0.788101 10.9785 0.507812C10.9785 0.227524 10.751 0 10.4707 0C10.1904 0 9.96289 0.227524 9.96289 0.507812Z" fill="currentColor" />
                                    </g>
                                    <defs>
                                        <clipPath id="clip0_362_358">
                                            <rect width="26" height="26" fill="currentColor" transform="translate(0.111328)" />
                                        </clipPath>
                                    </defs>
                                </svg>
                            <?php elseif ($key == "1-bedroom-granny-flat") : ?>
                                <svg width="42" height="26" viewBox="0 0 42 26" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M3.57016 26H0.5869C0.324384 26 0.111328 25.7869 0.111328 25.5244V1.12853C0.111328 0.506485 0.617812 0 1.23986 0H2.9172C3.53925 0 4.04573 0.506485 4.04573 1.12853V25.5244C4.04573 25.7869 3.83268 26 3.57016 26ZM1.06247 25.0488H3.09459V1.12853C3.09459 1.03056 3.01517 0.951144 2.9172 0.951144H1.23986C1.14189 0.951144 1.06247 1.03056 1.06247 1.12853V25.0488Z" fill="currentColor" />
                                    <path d="M41.0819 26H38.0986C37.8361 26 37.623 25.7869 37.623 25.5244V22.4285C37.623 22.1659 37.8361 21.9529 38.0986 21.9529H41.0819C41.3444 21.9529 41.5575 22.1659 41.5575 22.4285V25.5244C41.5575 25.7869 41.3444 26 41.0819 26ZM38.5742 25.0489H40.6063V22.904H38.5742V25.0489Z" fill="currentColor" />
                                    <path d="M17.1022 20.3711H3.5703C3.30778 20.3711 3.09473 20.158 3.09473 19.8955V13.7934C3.09473 13.5309 3.30778 13.3179 3.5703 13.3179H17.1022C17.3647 13.3179 17.5778 13.5309 17.5778 13.7934V19.8955C17.5778 20.158 17.3647 20.3711 17.1022 20.3711ZM4.04587 19.4199H16.6266V14.269H4.04587V19.4199Z" fill="currentColor" />
                                    <path d="M9.48071 14.2691H3.5703C3.30778 14.2691 3.09473 14.0561 3.09473 13.7936V10.1345C3.09473 9.87199 3.30778 9.65894 3.5703 9.65894H6.77423C8.52861 9.65894 9.95628 11.0866 9.95628 12.841V13.7936C9.95628 14.0561 9.74322 14.2691 9.48071 14.2691ZM4.04587 13.318H9.00513V12.841C9.00513 11.6107 8.00453 10.6101 6.77423 10.6101H4.04587V13.318Z" fill="currentColor" />
                                    <path d="M41.0818 22.9041H17.1025C16.84 22.9041 16.627 22.691 16.627 22.4285V12.8928C16.627 12.6303 16.84 12.4172 17.1025 12.4172H37.7447C39.8472 12.4172 41.5574 14.1274 41.5574 16.2299V22.4285C41.5574 22.691 41.3443 22.9041 41.0818 22.9041ZM17.5781 21.9529H40.6062V16.2299C40.6062 14.6519 39.3227 13.3684 37.7447 13.3684H17.5781V21.9529Z" fill="currentColor" />
                                    <path d="M20.2861 19.5971C20.2861 19.338 20.4962 19.1279 20.7553 19.1279H20.7681C21.0272 19.1279 21.2373 19.338 21.2373 19.5971C21.2373 19.8562 21.0272 20.0662 20.7681 20.0662H20.7553C20.4962 20.0662 20.2861 19.8562 20.2861 19.5971Z" fill="currentColor" />
                                    <path d="M20.2861 13.3684C20.2861 13.1057 20.4991 12.8928 20.7617 12.8928C21.0244 12.8928 21.2373 13.1057 21.2373 13.3684V17.3594C21.2373 17.622 21.0244 17.835 20.7617 17.835C20.4991 17.835 20.2861 17.622 20.2861 17.3594V13.3684Z" fill="currentColor" />
                                    <path d="M0.586914 3.23827C0.586914 2.97562 0.799835 2.7627 1.06249 2.7627H1.67169C1.93434 2.7627 2.14727 2.97562 2.14727 3.23827C2.14727 3.50092 1.93434 3.71384 1.67169 3.71384H1.06249C0.799835 3.71384 0.586914 3.50092 0.586914 3.23827Z" fill="currentColor" />
                                </svg>
                            <?php elseif ($key == "2-bedroom-granny-flats") : ?>
                                <svg width="40" height="30" viewBox="0 0 40 30" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M38.1624 16.6224V14.9849C38.1624 14.1832 37.5979 13.5137 36.8465 13.3448V2.94057C36.8465 1.45324 35.6369 0.243652 34.1496 0.243652H5.63118C4.14385 0.243652 2.93426 1.45324 2.93426 2.94057V13.3448C2.18286 13.513 1.61834 14.1832 1.61834 14.9849V16.6224C0.991316 16.9497 0.557617 17.5987 0.557617 18.3533V28.5739C0.557617 28.9296 0.845675 29.2183 1.20204 29.2183H38.5787C38.9351 29.2183 39.2232 28.9296 39.2232 28.5739V18.3533C39.2232 17.598 38.7895 16.9491 38.1624 16.6224ZM4.22311 2.94057C4.22311 2.16404 4.85465 1.5325 5.63118 1.5325H34.1496C34.9255 1.5325 35.5577 2.16404 35.5577 2.94057V13.3023H32.804V9.26303C32.804 8.48779 32.1731 7.85754 31.3985 7.85754H23.0919C22.3173 7.85754 21.6864 8.48843 21.6864 9.26303V13.3023H18.0944V9.26303C18.0944 8.48779 17.4635 7.85754 16.6889 7.85754H8.38288C7.60828 7.85754 6.97739 8.48843 6.97739 9.26303V13.3023H4.22311V2.94057ZM31.5145 13.3023H22.9753V9.26303C22.9753 9.19859 23.0274 9.14639 23.0919 9.14639H31.3985C31.463 9.14639 31.5152 9.19859 31.5152 9.26303V13.3023H31.5145ZM16.8055 13.3023H8.26624V9.26303C8.26624 9.19859 8.31843 9.14639 8.38288 9.14639H16.6895C16.754 9.14639 16.8062 9.19859 16.8062 9.26303V13.3023H16.8055ZM2.90784 14.9849C2.90784 14.7677 3.08441 14.5911 3.30158 14.5911H36.4792C36.6964 14.5911 36.8729 14.7677 36.8729 14.9849V16.3936H2.90719L2.90784 14.9849ZM1.84711 27.9295V18.3533C1.84711 17.9834 2.14806 17.6825 2.51796 17.6825H37.2635C37.6334 17.6825 37.9343 17.9834 37.9343 18.3533V25.2441H10.3935C10.0371 25.2441 9.74906 25.5328 9.74906 25.8886C9.74906 26.2443 10.0371 26.533 10.3935 26.533H37.9343V27.9295H1.84711Z" fill="currentColor" />
                                </svg>
                            <?php elseif ($key == "3-bedroom-granny-flats") : ?>
                                <svg width="40" height="30" viewBox="0 0 40 30" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M38.1624 16.6224V14.9849C38.1624 14.1832 37.5979 13.5137 36.8465 13.3448V2.94057C36.8465 1.45324 35.6369 0.243652 34.1496 0.243652H5.63118C4.14385 0.243652 2.93426 1.45324 2.93426 2.94057V13.3448C2.18286 13.513 1.61834 14.1832 1.61834 14.9849V16.6224C0.991316 16.9497 0.557617 17.5987 0.557617 18.3533V28.5739C0.557617 28.9296 0.845675 29.2183 1.20204 29.2183H38.5787C38.9351 29.2183 39.2232 28.9296 39.2232 28.5739V18.3533C39.2232 17.598 38.7895 16.9491 38.1624 16.6224ZM4.22311 2.94057C4.22311 2.16404 4.85465 1.5325 5.63118 1.5325H34.1496C34.9255 1.5325 35.5577 2.16404 35.5577 2.94057V13.3023H32.804V9.26303C32.804 8.48779 32.1731 7.85754 31.3985 7.85754H23.0919C22.3173 7.85754 21.6864 8.48843 21.6864 9.26303V13.3023H18.0944V9.26303C18.0944 8.48779 17.4635 7.85754 16.6889 7.85754H8.38288C7.60828 7.85754 6.97739 8.48843 6.97739 9.26303V13.3023H4.22311V2.94057ZM31.5145 13.3023H22.9753V9.26303C22.9753 9.19859 23.0274 9.14639 23.0919 9.14639H31.3985C31.463 9.14639 31.5152 9.19859 31.5152 9.26303V13.3023H31.5145ZM16.8055 13.3023H8.26624V9.26303C8.26624 9.19859 8.31843 9.14639 8.38288 9.14639H16.6895C16.754 9.14639 16.8062 9.19859 16.8062 9.26303V13.3023H16.8055ZM2.90784 14.9849C2.90784 14.7677 3.08441 14.5911 3.30158 14.5911H36.4792C36.6964 14.5911 36.8729 14.7677 36.8729 14.9849V16.3936H2.90719L2.90784 14.9849ZM1.84711 27.9295V18.3533C1.84711 17.9834 2.14806 17.6825 2.51796 17.6825H37.2635C37.6334 17.6825 37.9343 17.9834 37.9343 18.3533V25.2441H10.3935C10.0371 25.2441 9.74906 25.5328 9.74906 25.8886C9.74906 26.2443 10.0371 26.533 10.3935 26.533H37.9343V27.9295H1.84711Z" fill="currentColor" />
                                </svg>
                            <?php endif; ?>
                            <span class="ps-md-3"><?= $li ?></span>
                        </button>
                    </li>
                <?php endforeach; ?>
            </ul>
        </div>

        <?php foreach ($list as $key => $li) : ?>
            <div id="unit-<?= $key ?>" class="unitsDisplay mt-2 mt-md-5 <?= $countList++ == 0 ? "active" : "" ?>">
                <div class="row gy-4 gy-md-6">
                    <?php
                    $project = new WP_Query(array(
                        'post_type' => 'project',
                        'posts_per_page' => -1,
                        'orderby' => 'title',
                        'order' => 'ASC',
                        'tax_query' => array(
                            array(
                                'taxonomy' => 'category',
                                'field'    => 'slug',
                                'terms'    => $key,
                            ),
                        ),
                    ));

                    if ($project->have_posts()) :
                        $index = 1; ?>
                        <?php while ($project->have_posts()) :
                            $project->the_post();
                        ?>
                            <div class="col-md-6 col-xl-4">
                                <div class="unitCard">
                                    <div class="image position-relative <?= get_the_post_thumbnail_url($post->ID, 'full') ? '' : 'bg-light-grey d-flex justify-content-center align-items-center' ?>">
                                        <p class="position-absolute bg-primary text-white text-uppercase rounded-pill bedroom fw-700 px-4 py-2 fs-12 fs-md-16"><?= !empty(get_field('bedrooms')) ? get_field('bedrooms') : '0' ?> Bed<?= (!empty(get_field('bedrooms')) && get_field('bedrooms') > 1) ? 's' : '' ?></p>

                                        <?php if (get_the_post_thumbnail_url($post->ID, 'full')) : ?>
                                            <img src="<?= get_the_post_thumbnail_url($post->ID, 'full') ?>" alt="">
                                        <?php else : ?>
                                            <svg xmlns="http://www.w3.org/2000/svg" width="50" height="50" fill="#696969" class="bi bi-card-image" viewBox="0 0 16 16">
                                                <path d="M6.002 5.5a1.5 1.5 0 1 1-3 0 1.5 1.5 0 0 1 3 0" />
                                                <path d="M1.5 2A1.5 1.5 0 0 0 0 3.5v9A1.5 1.5 0 0 0 1.5 14h13a1.5 1.5 0 0 0 1.5-1.5v-9A1.5 1.5 0 0 0 14.5 2zm13 1a.5.5 0 0 1 .5.5v6l-3.775-1.947a.5.5 0 0 0-.577.093l-3.71 3.71-2.66-1.772a.5.5 0 0 0-.63.062L1.002 12v.54L1 12.5v-9a.5.5 0 0 1 .5-.5z" />
                                            </svg>
                                        <?php endif; ?>
                                    </div>

                                    <div class="content">
                                        <p class="text-uppercase fw-500 fs-12 fs-md-16"><?= $list[$key]; ?></p>

                                        <p class="fs-20 fs-lg-30 fw-700 py-2"><?= get_the_title() ?></p>
                                        <p class="fs-14 fs-lg-20 fw-700 opacity-50 text-black">from $<?= !empty(get_field('price')) ? number_format(get_field('price')) : '0' ?></p>

                                        <hr>

                                        <div class="row justify-content-between align-items-center gy-4">
                                            <div class="col-9">
                                                <div class="row align-items-center gx-3 gx-lg-4">
                                                    <p class="fs-14 fs-lg-16 fw-800 col-auto">
                                                        <svg width="27" height="27" viewBox="0 0 27 27" fill="none" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
                                                            <rect width="27" height="27" fill="url(#pattern0_167_1437)" fill-opacity="0.25" />
                                                            <defs>
                                                                <pattern id="pattern0_167_1437" patternContentUnits="objectBoundingBox" width="1" height="1">
                                                                    <use xlink:href="#image0_167_1437" transform="scale(0.0111111)" />
                                                                </pattern>
                                                                <image id="image0_167_1437" width="90" height="90" xlink:href="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAFoAAABaCAYAAAA4qEECAAAAAXNSR0IArs4c6QAAAxJJREFUeF7t279rFEEcBfA33imJtwGxUULEFewES8X/wb9ATJ1CSCCF2thYKRYRYmOr4n/g/2DKgGXAPRI02KS4MUHJZST+gNx4ezPr7j7v9l7K22Xedz777gjHjYH+KAKGkqIQCJpUAkELmiRAilGjBU0SIMWo0YImCZBi1GhBkwRIMWr0eEKnM+hgCcAdANdg0CHNOR4xDl8BfIDBW9j2S2DrW+xg8Y2evbqA1uE7ANdjF2/4fZvot2/jYGsnZp+R0OkMEmwI+S/STdj2zZhmx0F30hUYPI95ctN3j1mG/bge2ncs9AYMboQWm9Lr72GzW6G9x0Enl3uASUKLTed1Z2G7c6G9R0KnLrTQVF+3WdAxeMNPwETQI4skaNL7TNCCJgmQYtRoQZMESDFqtKBJAqQYNVrQJAFSjBrdHOjvMHiEfv8N9rc/Vb6ts5fm0WotwuExgDM56///GWpvtMFD9LKnlQP7C86lD+DwZGjOOMxQO/SRm8d+93Pt0J30IgyG54zDDLVDRwRU9hDyvkGckBnKfU06IZsch4ct6CJPocS7StCC9gRKtKmI5ch7S8ygRhd5CrVDFxlG9+b8uy8YikDeR8cpAEeUCZoVkuvmQS/MIjn9DHB3f+3fvYbt3wd2DprlUfVuwm6D0El6/Pu6lYExDNbQy1arHq1R60W4+dC7AC54CF9gM/+1RjmV3kySBt18aP30q7T6iQVOfEUh6Cph/bUEXaeuGk3SFbSg+QKkRH1GC5okQIpRowVNEiDFqNGCJgmQYtRoQZMESDFqtKBJAqQYNVrQJAFSjBotaJIAKUaNFjRJgBSjRguaJECKUaMFTRIgxajRgiYJkGLUaEGTBEgxhRvNPLhJMqg0JuIQUdyvSQU9+rkIutLe5i/2D9B7AM55K+7BZudJI09mTJIG3byPjisvAHdvcLduHba7PJkCpKmTsNuQU1ntNQCLv0d8BXu4qlNZoQd2fCprtFveOcM/r+tMS8h48HquW9xZ8GJhunuIgKBJtRC0oEkCpBg1WtAkAVKMGi1okgAp5gfOdlxqCsG5ggAAAABJRU5ErkJggg==" />
                                                            </defs>
                                                        </svg>
                                                        <?= !empty(get_field('bedrooms')) ? get_field('bedrooms') : '0' ?>
                                                    </p>

                                                    <p class="fs-14 fs-lg-16 fw-800 col-auto">
                                                        <svg width="27" height="27" viewBox="0 0 27 27" fill="none" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
                                                            <rect width="27" height="27" fill="url(#pattern0_167_1440)" fill-opacity="0.25" />
                                                            <defs>
                                                                <pattern id="pattern0_167_1440" patternContentUnits="objectBoundingBox" width="1" height="1">
                                                                    <use xlink:href="#image0_167_1440" transform="scale(0.0111111)" />
                                                                </pattern>
                                                                <image id="image0_167_1440" width="90" height="90" xlink:href="data:image/png;base64,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" />
                                                            </defs>
                                                        </svg>
                                                        <?= !empty(get_field('bathrooms')) ? get_field('bathrooms') : '0' ?>
                                                    </p>

                                                    <p class="fs-14 fs-lg-16 fw-800 col-auto">
                                                        <svg width="27" height="27" viewBox="0 0 27 27" fill="none" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
                                                            <rect width="27" height="27" fill="url(#pattern0_167_1427)" fill-opacity="0.25" />
                                                            <defs>
                                                                <pattern id="pattern0_167_1427" patternContentUnits="objectBoundingBox" width="1" height="1">
                                                                    <use xlink:href="#image0_167_1427" transform="scale(0.0111111)" />
                                                                </pattern>
                                                                <image id="image0_167_1427" width="90" height="90" xlink:href="data:image/png;base64,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" />
                                                            </defs>
                                                        </svg>
                                                        <?= !empty(get_field('carparks')) ? get_field('carparks') : '0' ?>
                                                    </p>

                                                    <p class="fs-14 fs-lg-16 fw-800 col-auto">
                                                        <svg width="27" height="27" viewBox="0 0 27 27" fill="none" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
                                                            <rect width="27" height="27" fill="url(#pattern0_167_1441)" fill-opacity="0.25" />
                                                            <defs>
                                                                <pattern id="pattern0_167_1441" patternContentUnits="objectBoundingBox" width="1" height="1">
                                                                    <use xlink:href="#image0_167_1441" transform="scale(0.0111111)" />
                                                                </pattern>
                                                                <image id="image0_167_1441" width="90" height="90" xlink:href="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAFoAAABaCAYAAAA4qEECAAAAAXNSR0IArs4c6QAAAoxJREFUeF7t3EFqk2EQxvHnw01rAl5AMAt3gkvFO3gCL+BKvIoLVx7AG3gHuysU3JqFXkA/EKRSqaButM/Edzq8Dv9sZ953wi9DE/KELuJRIrCUTGGIgC5aAqCBLhIoGsNGA10kUDSGjQa6SKBoDBv9A3p3pI2eSnoi6Z4WbQ7yX/fW0TYcNPB/bD6+e1s3zt9Iuv/PTx9oR7c70lYnQ8iXI4A20Jvdcy164V4OWwfaQp9o0QML6RqANkLbO5+lZescbR1oB727sIiRBqCBjuzJ9fds2ejrR76cAHSNM9BFzkADXSVQNIe/0UAXCRSNYaOBLhIoGsNGR6EHk5HoGNfX+ruOjGTEAUbrfaGTkpEopOtrC52VjDjAaL0xdE4yEoV0fW2hs5IRBxit94VO+h45Cun6gHZCSXWgkyDdNUA7oaQ60EmQ7hqgnVBSHegkSHcN0E4oqQ50EqS7BmgnlFQHOgnSXQO0E0qqzws9STKS5DznL/5nSkb6Qk+WjLSFni0ZaQw9VzLSFnq2ZKQv9GTJCNBZAkX3TPc5OusnWEV+4TFAh6nGGoEe8wufBjpMNdYI9Jhf+DTQYaqxRqDH/MKngQ5TjTUCPeYXPg10mGqsMR+6WTIyxvv7dCp0x2RkPuimych00F2TkQmheyYj00F3TUbmg26ajACdJVB0T9rHu67JSNbrAHSWpLkHaKCLBIrGsNEl0J+07m+5SbH/iM6b4VWOb7XuHwHtBIbryzOt71+6a9hoJ3R1/VTrzYfSu6/uGqCd0N/rp/p2/lhfPnyMXAF0ROlXz8UqLWfS8lrr8avIJv88GoM+6MnQ/CcBoIv2AmigiwSKxrDRQBcJFI1ho4EuEigaw0YXQX8H5B3qW/WmgvEAAAAASUVORK5CYII=" />
                                                            </defs>
                                                        </svg>
                                                        <?= !empty(get_field('storey')) ? get_field('storey') : '0' ?>
                                                    </p>
                                                </div>
                                            </div>

                                            <div class="col-auto">
                                                <p class="fs-14 fs-md-16 fw-800 text-grey"><span class="text-black"><?= !empty(get_field('area')) ? number_format(get_field('area')) : "0" ?></span>m<sup>2</sup></p>
                                            </div>
                                        </div>

                                        <div class="row justify-content-end gx-3 mt-5">
                                            <div class="col-auto">
                                                <a href="tel:<?= get_field('phone_number', 'options') ?>" class="rounded-9 btn border-1 border-grey text-black fs-18 fw-600 gap-2 px-4">
                                                    <svg width="22" height="22" viewBox="0 0 22 22" fill="none" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
                                                        <rect width="22" height="22" fill="url(#pattern0_167_1433)" />
                                                        <defs>
                                                            <pattern id="pattern0_167_1433" patternContentUnits="objectBoundingBox" width="1" height="1">
                                                                <use xlink:href="#image0_167_1433" transform="scale(0.0111111)" />
                                                            </pattern>
                                                            <image id="image0_167_1433" width="90" height="90" xlink:href="data:image/png;base64,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" />
                                                        </defs>
                                                    </svg>

                                                    Call
                                                </a>
                                            </div>

                                            <div class="col-auto">
                                                <a href="#" class="rounded-9 btn btn-primary text-white fs-18 fw-500 px-4">Enquire</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                    <?php
                        endwhile;
                    endif;
                    wp_reset_postdata(); ?>
                </div>
            </div>
        <?php endforeach; ?>

        <!-- <div class="col-md-4 col-lg-3 mx-auto mt-5">
            <button class="btn border-primary btn-white w-100 text-primary fw-600 fs-20 rounded-20">View all</button>
        </div> -->
    </div>
</section>