@extends('layouts.main2')
@section('content')

<div class="it-breadcrumb-area fix it-breadcrumb-style-2 z-index-1">
      <img class="it-breadcrumb-shape-1" src="assets/img/breadcrumb-1-1.png" alt="">
      <img class="it-breadcrumb-shape-3" src="assets/img/hero-1-5.png" alt="">
      <div class="container">
         <div class="row align-items-center">
            <div class="col-12">
               <div class="it-breadcrumb-content text-center z-index-1">
                  <div class="it-breadcrumb-title-box">
                     <h3 class="it-breadcrumb-title style-2">
                       Faq’s
                        <span class="title-shape">
                           <svg width="346" height="26" viewBox="0 0 346 26" fill="none" xmlns="http://www.w3.org/2000/svg">
                              <path d="M4.2295 0.599974C6.15679 0.266842 8.68327 0.605261 10.6076 1.07574C11.2104 1.22164 10.908 1.88542 11.3242 2.01596C12.1381 2.27044 12.8941 1.94254 13.6983 2.24633C13.9648 2.35025 13.6376 3.40108 13.917 3.48602C15.4485 3.94394 16.8912 3.67101 18.4438 3.8881C26.0766 4.95928 33.5881 5.32418 41.3064 5.7725C43.8606 5.91939 46.9587 6.85993 49.5834 6.43321C49.8911 6.38245 49.704 5.46192 49.7623 5.38576C50.6763 4.21982 50.3781 6.0808 50.9785 6.32558C53.3634 7.292 55.9929 7.36668 58.2815 7.00228C59.2554 6.84456 58.2714 5.01851 59.2563 6.04178C59.3246 6.11091 59.0813 7.09016 59.3488 7.19347C59.9555 7.4258 61.1028 7.2465 61.5715 7.3222C62.4749 7.47304 62.6241 7.46262 63.477 7.47047C64.6405 7.48973 66.0342 7.97065 67.2895 7.74413C67.5572 7.69287 67.1987 6.69138 67.6252 6.51907C68.0523 6.34703 69.1826 6.4277 69.5639 6.66264C69.9455 6.89769 69.7865 7.68655 69.8545 7.86696C70.4148 9.38977 71.7105 7.27268 71.8776 7.2198C74.9359 6.31799 77.5839 7.51094 80.4467 7.49646C82.6356 7.48285 84.9764 7.07661 87.0473 7.12309C89.5097 7.18236 91.6366 7.71761 94.0313 7.61496C94.2845 7.60528 93.9832 6.42729 94.2924 6.41308C97.5721 6.26323 100.869 6.37907 104.135 7.16253C104.466 7.24213 104.044 8.27904 104.375 8.42047C106.403 9.26348 109.589 11.2951 110.757 6.78306C112.121 6.95383 113.789 7.12928 115.009 8.0332C115.797 8.61498 115.039 9.74573 116.001 9.26078C116.218 9.15273 115.932 8.16612 116.257 8.07877C117.625 7.71193 119.125 8.02723 120.493 7.51166C120.77 7.40447 120.691 6.51975 120.769 6.36009C121.425 5.06689 122.53 7.19622 122.769 7.35034C124.592 8.49945 125.905 8.03946 127.617 8.06113C128.012 8.06667 127.54 6.87969 127.92 6.84231C129.896 6.66437 131.901 6.75887 133.84 7.27894C134.271 7.39749 133.879 8.41162 134.085 8.52008C134.993 8.98598 135.186 7.07265 136.054 7.48258C136.236 7.56654 136.137 8.43381 136.171 8.52889C136.697 10.0214 137.14 7.90207 137.274 7.85481C138.96 7.20954 140.037 9.41614 141.687 9.0968C141.884 9.05637 141.437 7.9612 141.989 7.91462C145.646 7.59786 149.549 7.8843 153.15 8.74794C153.709 8.88075 153.313 9.70623 153.349 9.80767C153.931 11.3926 154.306 9.26461 154.49 9.18383C155.95 8.6018 157.311 10.38 158.283 7.84342C164.446 8.69901 170.518 7.2537 176.647 9.49974C176.725 9.52573 176.59 10.5736 176.745 10.6209C178.602 11.202 178.225 9.57566 179.453 7.5803C179.766 7.07924 180.727 9.47912 180.811 9.65498C181.12 10.303 180.808 11.8623 180.911 11.9877C181.761 12.9718 181.606 7.81954 182.741 7.81362C182.776 7.82208 182.631 8.77106 182.726 8.86501C183.023 9.15996 183.314 8.78199 183.604 9.10738C184.269 9.86034 184.496 12.3633 185.515 10.9023C185.644 10.7127 185.436 7.79056 186.461 7.92479C186.872 7.98078 188.666 7.92397 189.164 8.11153C189.662 8.29885 189.324 9.24202 189.36 9.28267C190.703 10.5232 190.197 11.0412 190.872 12.8827C191.563 14.7171 191.358 10.3364 191.635 9.84638C191.914 9.3577 192.916 10.3816 193.161 10.7379C193.407 11.0944 193.104 11.694 193.322 11.8955C194.763 13.2115 193.944 9.71836 194.413 9.02121C195.523 7.37049 196.363 10.6167 197.414 10.9311C197.694 11.0161 197.463 10.2769 197.711 10.2068C198.693 9.93882 199.284 10.9505 200.382 10.0168C200.562 9.86466 201.439 7.90785 202.016 9.33938C202.1 9.54579 201.866 10.3564 202.289 10.5362C202.921 10.8061 204.048 10.9789 204.712 10.7058C205.203 10.5037 204.635 9.17158 205.254 9.58377C205.528 9.76783 205.024 10.5502 205.539 10.8309C206.056 11.1115 207.333 11.0725 207.859 11.0436C208.365 11.0142 208.084 10.0032 208.125 9.93484C208.372 9.54337 209.336 9.05181 209.42 9.05271C213.598 8.91483 217.619 10.578 221.671 10.039C221.705 10.0347 221.739 10.0302 221.773 10.0256C222.108 9.98152 221.881 8.91509 221.932 8.89736C223.071 8.44612 222.183 11.2868 222.979 12.2338C222.856 10.0685 223.327 10.4589 224.112 10.2186C224.489 10.101 224.28 9.26317 224.314 9.17721C224.869 7.9015 225.259 9.54529 225.36 9.88148C225.73 11.1182 226.116 9.654 226.386 10.4805C226.648 11.3009 226.057 12.5206 226.827 12.5023C227.04 11.7263 226.463 9.70236 227.044 9.37194C229.213 8.1222 233.237 9.69766 234.984 9.85676C236.749 10.0156 237.245 9.87091 238.285 10.1475C240.139 10.6478 239.454 9.14702 240.576 8.45521C241.686 7.76353 241.155 11.4638 241.321 12.2583C241.489 13.0524 241.666 12.2337 241.871 12.6699C242.075 13.106 241.638 13.6481 242.115 13.8105C242.596 13.9727 243.862 12.5547 244.018 11.7229C244.364 9.96052 243.761 8.114 245.02 8.75939C245.093 8.7977 244.86 9.77094 245.139 9.86832C247.327 10.6099 249.543 10.6492 251.736 11.3048C252.035 11.3964 251.771 12.4791 251.945 12.5447C253.729 13.2313 253.081 11.4091 254.08 9.37978C253.859 12.0771 254.44 13.7253 255.769 13.7374C256.615 13.7456 256.464 12.5682 256.997 11.7367C257.158 11.486 257.734 12.2931 257.834 11.739C258.174 9.92747 257.605 7.90207 259.047 8.7054C259.11 8.7436 258.914 9.7352 259.129 9.79467C260.489 10.1841 260.693 8.28971 262.159 8.057C263.356 7.87428 265.415 9.025 266.764 9.21083C266.746 12.2427 267.986 11.5466 268.509 9.45569C269.35 9.54033 270.296 9.42142 271.149 9.71016C271.438 9.80861 271.248 10.6865 271.285 10.7813C271.828 12.2691 272.218 10.2354 272.405 10.1558C274.428 9.38172 276.08 10.9255 278.027 9.43051C278.099 9.37675 278.21 7.27113 278.731 8.81275C278.762 8.91902 278.121 9.87229 279.023 9.95339C279.678 10.0118 280.748 10.6175 281.762 10.608C282.16 10.604 282.564 10.5031 282.923 10.2323C283.233 10.0025 284.038 8.30627 284.635 9.65284C284.714 9.83565 284.613 10.438 284.727 10.7761C285.094 11.8538 285.343 9.72924 285.763 11.5456C286.187 13.3618 287.1 14.7331 288.398 13.5094C288.438 13.4739 288.777 11.7927 289.173 11.8268C289.812 11.8828 290.716 12.2514 291.381 12.2528C291.701 12.2529 291.516 11.2016 291.572 11.1835C293.731 10.6366 295.247 11.5988 297.539 12.0439C297.964 12.1277 299.197 10.7198 299.996 11.8624C300.874 13.113 299.867 18.2414 301.954 17.0484C302.798 16.5711 303.944 10.0623 305.392 13.4629C308.302 12.664 310.972 14.4235 313.891 13.2495C314.023 13.1975 314.448 11.3795 314.755 11.4063C315 11.4296 315.184 11.6859 315.353 11.9274C315.501 12.136 315.636 12.3338 315.787 12.3609C317.15 12.6278 318.41 11.9163 319.728 12.0553C320.221 12.1064 320.036 12.9827 320.628 13.045C321.219 13.107 321.65 11.9582 322.439 12.5408C323.045 12.9853 323.566 15.3717 324.358 15.677C324.472 13.3432 325.022 13.4103 326.035 12.836C326.232 12.7247 326.061 11.9033 326.156 11.8088C326.546 11.406 326.852 12.0945 327.221 11.6551C327.31 11.5496 327.352 10.7527 327.427 10.6215C328.078 9.47558 328.966 11.3194 329.108 11.6402C329.686 12.8599 330.034 11.8402 330.5 12.3348C330.96 12.8292 330.196 13.3706 330.752 13.6866C331.895 14.3393 333.417 14.3046 334.632 14.3909C335.118 14.4197 334.826 13.3422 334.897 13.3217C334.962 13.3065 335.027 13.2971 335.091 13.2924C336.022 13.2442 336.863 14.1621 337.516 12.2202C337.809 17.7418 338.15 11.7289 339.489 12.9384C339.594 13.0362 339.516 15.6328 339.066 15.978C338.616 16.3231 338.04 15.4651 337.414 16.0158C337.263 16.1442 336.314 18.5164 336.202 18.6572C335.303 19.7529 335.415 15.8779 335.381 15.6623C335.293 15.1137 335.162 14.8373 335.01 14.7375L335.041 14.7389C334.533 14.4265 333.828 15.9546 333.618 16.0823C332.363 16.8482 331.393 16.2417 330.37 16.7765C329.708 17.1219 329.502 19.6538 329.009 19.5489C327.375 19.2041 326.951 15.637 325.257 18.6405C324.894 19.282 325.122 22.067 324.015 19.8421C323.944 19.7016 323.12 17.6753 322.57 18.9226C322.501 19.0798 322.478 19.8883 322.391 19.9537C321.814 20.3765 321.452 19.722 320.823 20.0155C320.2 20.3092 319.445 20.7538 318.744 20.4677C318.321 20.2963 317.795 18.7817 317.593 18.4101C317.022 17.3395 316.378 19.076 316.035 17.786C315.68 16.4896 316.417 14.5305 315.454 13.6876C315.421 15.0722 315.367 16.4807 315.315 17.885C315.287 18.6119 315.26 19.3377 315.235 20.0584C313.099 19.9706 311.011 19.2722 308.869 19.3411C308.603 19.3518 308.862 20.4845 308.577 20.525C307.375 20.6908 306.338 19.8724 305.09 20.1763C304.126 20.4158 303.05 21.5967 302.04 21.8827C301.462 19.469 299.957 20.2617 298.879 20.0237C298.499 19.9415 298.535 19.2997 298.27 19.0856C297.267 18.2935 297.705 20.4263 297.421 20.7559C296.201 22.1623 296.18 17.3512 294.771 17.4447C294.694 17.448 293.736 19.9949 293.608 20.1522C292.787 21.1784 293.491 19.2575 292.995 19.0589C292.089 18.6959 291.466 18.0718 290.383 18.8026C290.067 19.0192 289.287 20.6029 288.708 19.3557C288.631 19.1924 288.691 18.3459 288.627 18.2951C287.484 17.4463 287.401 20.1081 286.725 20.9976C286.044 21.8869 285.06 20.0306 284.859 19.4972C284.338 18.1172 285.289 18.919 285.318 18.7851C285.693 17.191 284.942 17.453 284.376 17.3078C284.343 14.6958 283.537 14.8386 283.787 17.1678C283.815 17.4223 284.267 17.1866 284.376 17.3078C283.83 19.8603 282.954 20.1732 282.027 17.7641C281.796 17.1601 281.816 16.5069 281.675 16.0998C281.554 15.7461 281.31 15.578 280.67 15.7922C280.056 16.0006 280.266 17.801 279.722 18.2854C278.478 19.3906 276.867 17.7056 275.576 17.9666C275.103 18.0613 275.563 19.0465 275.236 19.1452C274.397 19.4103 273.641 18.671 272.783 19.0487C272.707 19.0842 272.892 20.1145 272.631 20.1275C270.617 20.2463 268.854 19.5882 266.744 19.5731C265.703 19.5663 263.909 20.1378 262.839 20.026C261.028 19.838 258.722 18.3459 257.186 18.714C256.164 18.9497 256.386 19.9795 255.941 20.6828C255.12 22.0459 253.611 19.6127 253.394 19.2359C253.389 19.2234 254.285 18.9779 253.806 18.4504C253.524 17.3492 253.404 19.2311 253.394 19.2359C253.257 18.9925 251.534 18.7637 251.166 18.9618C250.973 19.0701 251.084 20.0459 250.983 20.0839C248.66 20.9646 246.295 21.2203 243.904 20.7717C243.863 20.7522 243.921 19.66 243.824 19.6276C242.476 19.1465 241.514 20.4855 240.43 21.2823C239.314 22.0788 238.38 21.8164 237.696 19.9442C236.864 20.1831 235.632 19.3586 234.907 18.8582C234.182 18.3579 234.085 20.4838 234.028 20.526C232.156 21.8775 230.913 20.6652 228.961 20.4827C228.03 20.3924 226.043 20.7077 225.058 20.9437C224.249 21.1338 223.752 20.6375 222.989 20.9587C222.886 21.0016 222.994 21.9477 222.962 21.9842C222.11 23.1196 222.512 20.8045 222.334 20.3919C222.108 19.8698 221.911 19.4327 221.704 19.1145C221.334 18.5184 220.931 18.34 220.234 18.8034C219.988 18.9662 219.276 22.3001 218.819 22.4966C218.223 22.7459 218.445 21.551 217.818 21.8426C217.764 21.8664 217.778 22.603 217.388 22.572C215.64 22.4372 213.695 22.0157 211.84 22.0963C211.593 22.1044 211.915 23.2717 211.557 23.3027C209.89 23.4473 207.949 23.4112 206.318 22.8703C205.913 22.7335 206.164 21.9144 206.075 21.6719C205.53 20.204 204.766 22.3425 204.639 22.3836C201.549 23.4213 199.287 21.497 196.145 22.4288C195.98 22.4835 194.702 24.7776 194.114 22.8163C194.074 22.6858 193.493 20.6791 192.989 22.0545C192.957 22.1406 193.321 23.1734 192.693 23.0703C192.07 22.9675 191.033 23.662 190.196 22.5288C189.926 22.1719 189.284 20.1704 188.481 21.7707C188.43 21.8824 187.192 25.499 186.732 23.0087C186.657 22.5987 186.726 19.9613 185.753 21.3171C185.567 21.5799 185.909 22.1669 185.417 22.536C184.669 23.1049 183.701 22.4022 182.788 23.5804C182.63 23.789 181.957 25.5814 181.404 24.2249C181.317 24.0125 181.477 23.1315 181.187 23.034C179.801 22.5666 178.372 23.1609 176.988 22.557C176.496 22.3448 176.742 20.9206 176.228 20.5411C175.713 20.1618 174.673 19.7989 174.132 20.4513C173.592 21.1041 174.194 23.3702 173.38 23.5548C169.916 24.3562 166.397 23.0388 162.922 22.8573C162.402 22.8302 162.837 23.6403 162.069 23.6586C159.235 23.7297 154.372 24.5092 151.934 22.7938C149.977 21.4198 152.43 20.3587 150.935 19.8023C150.213 19.5368 149.44 22.177 149.265 22.2607C147.556 23.1106 146.362 21.9469 144.842 22.3111C144.526 22.3867 144.84 23.4544 144.572 23.5069C143.655 23.6958 142.684 23.2224 141.801 23.313C141.405 23.3562 141.481 24.1723 141.115 24.1106C140.237 23.9726 139.471 23.6324 138.627 22.8704C138.55 22.801 139.064 21.7835 138.424 21.7482C137.389 21.6939 136.095 20.944 134.896 21.7281C134.541 21.9639 134.534 23.8298 133.761 22.5442C133.599 22.2757 133.796 20.0345 132.907 21.9737C132.761 22.296 131.287 24.9127 130.548 23.2325C130.354 22.7902 129.854 20.9588 129.428 21.2485C129.37 21.2947 129.606 22.296 129.252 22.3951C128.008 22.727 126.685 22.6251 125.407 22.9439C125.067 23.031 125.577 24.0662 125.071 24.1629C123.678 24.4303 121.928 24.173 120.55 23.8537C120.042 23.734 120.39 22.8736 120.352 22.7802C119.753 21.2619 119.409 23.3157 119.211 23.4361C117.983 24.1575 117.067 23.1969 115.942 23.4563C115.632 23.5253 115.855 24.5031 115.794 24.5906C115.157 25.4457 115.627 23.6864 115.221 23.4942C114.082 22.95 112.811 23.0335 111.654 23.163C111.23 23.212 111.712 24.345 111.33 24.3758C109.098 24.58 106.769 24.4803 104.565 23.8632C104.15 23.745 104.408 22.8702 104.32 22.6709C103.715 21.2769 102.864 23.1848 102.665 23.367C101.763 24.1989 101.408 23.4275 100.608 23.5748C96.6792 24.308 91.8612 23.8148 88.1436 23.513C83.3384 23.1246 79.5826 22.3078 74.9881 22.5414C74.6953 22.5552 74.9951 23.7164 74.7428 23.7432C71.4829 24.036 68.2996 23.5941 65.0291 23.9425C64.7627 23.969 65.1511 25.0695 64.7237 25.1491C63.8469 25.3202 62.7337 25.2646 61.8429 24.9161C61.4084 24.7483 61.9867 23.8004 61.5493 23.6508C60.5309 23.3002 59.4391 23.2259 58.3923 23.4066C57.9469 23.486 58.6238 24.6104 58.0444 24.6257C54.1171 24.7527 50.2326 24.9618 46.2607 23.5177C45.9877 23.4185 45.7397 21.1288 45.1614 21.5703C45.1202 22.2062 45.1255 22.954 45.109 23.6335C39.3716 24.0218 33.7006 23.2496 27.9539 23.1491C27.7114 23.1451 28.1351 24.3572 27.6657 24.3557C24.945 24.3483 22.3169 24.6947 19.5323 23.4991C19.2561 23.3822 19.3893 21.2465 18.578 21.5726C18.4351 21.6321 17.2112 21.9216 16.8976 22.3863C16.8549 22.4564 17.0818 23.4521 16.6881 23.4827C14.3997 23.6429 11.9984 23.4247 9.70844 22.8246C9.33885 22.7259 9.72791 21.663 9.46464 21.5835C7.59813 21.0273 5.57382 21.842 3.78835 20.8853C2.59327 20.2411 3.02768 18.4048 2.38695 16.6014C2.29632 16.347 1.55767 16.3095 1.5154 15.259C1.40712 12.6174 1.75361 9.72304 1.59592 6.90751C1.56256 6.30107 0.57604 6.95821 1.15594 5.49014C1.19647 5.39188 1.91165 4.90262 2.08634 4.40468C2.20797 4.06042 1.98224 2.99275 2.23142 2.5517C2.48058 2.11105 2.75971 3.00568 3.17363 2.48701C3.58733 1.96194 3.39983 0.747085 4.2295 0.599974ZM231.716 16.6217C231.05 15.6033 230.964 19.3423 231.679 18.4453C231.713 18.3975 231.75 16.6717 231.716 16.6217ZM311.048 16.4508C310.207 14.7935 309.589 17.2117 310.185 18.4915C310.781 19.7699 311.305 16.9532 311.048 16.4508ZM319.93 15.3421C318.963 14.0227 318.713 19.3209 319.786 18.2695C319.848 18.2102 319.985 15.4188 319.93 15.3421ZM5.32375 16.0758C5.3145 16.0262 4.7835 15.9799 4.77101 16.0292C4.49296 17.2176 5.55474 17.3095 5.32375 16.0758ZM328.737 14.3526C328.458 13.6193 327.521 14.4015 327.865 15.3115C328.141 16.0433 329.074 15.2638 328.737 14.3526ZM197.449 12.756C197.438 12.7003 197.052 12.6516 197.061 12.9665C197.091 13.9807 197.627 13.6924 197.449 12.756ZM343.71 15.29C341.378 14.9539 340.652 10.4291 342.847 11.1421C343.253 11.2653 341.843 12.4587 342.335 12.8973C343.284 13.6996 344.089 10.9832 345.041 12.4979C345.22 12.7762 343.847 15.3209 343.705 15.2959C343.707 15.2939 343.708 15.2919 343.71 15.29ZM231.318 12.1324C231.306 12.083 230.77 12.038 230.757 12.0871C230.471 13.275 231.55 13.3664 231.318 12.1324ZM175.241 10.5274C175.212 10.4221 173.981 10.3283 173.941 10.4255C173.306 12.3688 175.795 12.5644 175.241 10.5274ZM266.785 9.29167C267.354 8.09674 268.041 7.95525 268.507 9.45417C267.927 9.37522 267.358 9.36427 266.785 9.29167Z" fill="#F8C62F" fill-opacity="0.6" />
                           </svg>
                        </span>
                     </h3>
                  </div>
                  <div class="it-breadcrumb-list-wrap">
                     <div class="it-breadcrumb-list">
                        <span><a href="index.html">Home</a></span>
                        <span class="dvdr">
                           <svg width="15" height="14" viewBox="0 0 15 14" fill="none" xmlns="http://www.w3.org/2000/svg">
                              <path d="M14.6364 7.6364C14.9879 7.28492 14.9879 6.71508 14.6364 6.3636L8.90883 0.636039C8.55736 0.284567 7.98751 0.284567 7.63604 0.636039C7.28457 0.987511 7.28457 1.55736 7.63604 1.90883L12.7272 7L7.63604 12.0912C7.28457 12.4426 7.28457 13.0125 7.63604 13.364C7.98751 13.7154 8.55736 13.7154 8.90883 13.364L14.6364 7.6364ZM0 7V7.9H14V7V6.1H0V7Z" fill="white" />
                           </svg>
                        </span>
                        <span>Faq’s</span>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </div>
   </div>      
   <!-- breadcrumb-area-end -->

   <!-- faq-area-start -->
   <div class="it-faq-area it-faq-inner-style it-faq-style-2 pt-130 pb-100">
      <div class="container">
         <div class="row">
            <div class="col-12">
               <div class="it-faq-tab-box mb-80">
                  <ul class="nav nav-tab justify-content-center" id="myTab" role="tablist">
                     <li class="nav-item" role="presentation">
                        <button class="nav-link active" id="student-tab" data-bs-toggle="tab" data-bs-target="#student" type="button" role="tab" aria-controls="student" aria-selected="true">Student</button>
                     </li>
                     <li class="nav-item" role="presentation">
                        <button class="nav-link" id="instructor-tab" data-bs-toggle="tab" data-bs-target="#instructor" type="button" role="tab" aria-controls="instructor" aria-selected="false">Instructor</button>
                     </li>
                  </ul>
               </div>
               <div class="tab-content" id="myTabContent">
                  <div class="tab-pane fade show active" id="student" role="tabpanel" aria-labelledby="student-tab">
                     <div class="row gx-35">
                        <div class="col-xl-6 col-lg-6 wow itfadeLeft" data-wow-duration=".9s"
                              data-wow-delay=".5s">
                           <div class="it-custom-accordion">
                              <div class="accordion" id="accordionExample">
                                 <div class="accordion-items mb-30">
                                    <h4 class="accordion-header" id="headingOne2">
                                       <button class="accordion-buttons " type="button" data-bs-toggle="collapse"
                                          data-bs-target="#collapseOne2" aria-expanded="true"
                                          aria-controls="collapseOne2">
                                         What is this theme designed for?                         
                                       </button>
                                    </h4>
                                    <div id="collapseOne2" class="accordion-collapse collapse show"
                                       aria-labelledby="headingOne2" data-bs-parent="#accordionExample">
                                       <div class="accordion-body">
                                          <p class="mb-0">This theme is specifically designed for educational institutions, online 
                                          courses, schools, universities, and e-learning platforms. If you want to
                                          build a Education or E-learning website Educeet is a perfect theme.</p>
                                       </div>
                                    </div>
                                 </div>
                                 <div class="accordion-items mb-30">
                                    <h4 class="accordion-header" id="headingTwo3">
                                       <button class="accordion-buttons collapsed" type="button"
                                          data-bs-toggle="collapse" data-bs-target="#collapseTwo3" aria-expanded="false"
                                          aria-controls="collapseTwo3">
                                        Is this theme compatible with Elementor?                         
                                       </button>
                                    </h4>
                                    <div id="collapseTwo3" class="accordion-collapse collapse"
                                       aria-labelledby="headingTwo3" data-bs-parent="#accordionExample">
                                       <div class="accordion-body">
                                          <p class="mb-0">This theme is specifically designed for educational institutions, online 
                                          courses, schools, universities, and e-learning platforms. If you want to
                                          build a Education or E-learning website Educeet is a perfect theme.</p>
                                       </div>
                                    </div>
                                 </div>
                                 <div class="accordion-items mb-30">
                                    <h4 class="accordion-header" id="headingFour4">
                                       <button class="accordion-buttons collapsed" type="button"
                                          data-bs-toggle="collapse" data-bs-target="#collapseFour4"
                                          aria-expanded="false" aria-controls="collapseFour4">
                                         Why do we need to use LMS plugins?                      
                                       </button>
                                    </h4>
                                    <div id="collapseFour4" class="accordion-collapse collapse"
                                       aria-labelledby="headingFour4" data-bs-parent="#accordionExample">
                                       <div class="accordion-body">
                                          <p class="mb-0">This theme is specifically designed for educational institutions, online 
                                          courses, schools, universities, and e-learning platforms. If you want to
                                          build a Education or E-learning website Educeet is a perfect theme.</p>
                                       </div>
                                    </div>
                                 </div>
                                 <div class="accordion-items mb-30">
                                    <h4 class="accordion-header" id="headingFour5">
                                       <button class="accordion-buttons collapsed" type="button"
                                          data-bs-toggle="collapse" data-bs-target="#collapseFour5"
                                          aria-expanded="false" aria-controls="collapseFour4">
                                         Do you offer a free trial for Educeet Theme?                       
                                       </button>
                                    </h4>
                                    <div id="collapseFour5" class="accordion-collapse collapse"
                                       aria-labelledby="headingFour5" data-bs-parent="#accordionExample">
                                       <div class="accordion-body">
                                          <p class="mb-0">This theme is specifically designed for educational institutions, online 
                                          courses, schools, universities, and e-learning platforms. If you want to
                                          build a Education or E-learning website Educeet is a perfect theme.</p>
                                       </div>
                                    </div>
                                 </div>
                              </div>
                           </div>
                        </div>
                        <div class="col-xl-6 col-lg-6 wow itfadeRight" data-wow-duration=".9s"
                              data-wow-delay=".7s">
                           <div class="it-custom-accordion">
                              <div class="accordion" id="accordionExample2">
                                 <div class="accordion-items mb-30">
                                    <h4 class="accordion-header" id="headingOne22">
                                       <button class="accordion-buttons " type="button" data-bs-toggle="collapse"
                                          data-bs-target="#collapseOne22" aria-expanded="true"
                                          aria-controls="collapseOne22">
                                         Do you provide theme updates?                         
                                       </button>
                                    </h4>
                                    <div id="collapseOne22" class="accordion-collapse collapse show"
                                       aria-labelledby="headingOne22" data-bs-parent="#accordionExample2">
                                       <div class="accordion-body">
                                          <p class="mb-0">This theme is specifically designed for educational institutions, online 
                                          courses, schools, universities, and e-learning platforms. If you want to
                                          build a Education or E-learning website Educeet is a perfect theme.</p>
                                       </div>
                                    </div>
                                 </div>
                                 <div class="accordion-items mb-30">
                                    <h4 class="accordion-header" id="headingTwo33">
                                       <button class="accordion-buttons collapsed" type="button"
                                          data-bs-toggle="collapse" data-bs-target="#collapseTwo33" aria-expanded="false"
                                          aria-controls="collapseTwo33">
                                          Is this theme compatible with Elementor?                          
                                       </button>
                                    </h4>
                                    <div id="collapseTwo33" class="accordion-collapse collapse"
                                       aria-labelledby="headingTwo33" data-bs-parent="#accordionExample2">
                                       <div class="accordion-body">
                                          <p class="mb-0">This theme is specifically designed for educational institutions, online 
                                          courses, schools, universities, and e-learning platforms. If you want to
                                          build a Education or E-learning website Educeet is a perfect theme.</p>
                                       </div>
                                    </div>
                                 </div>
                                 <div class="accordion-items mb-30">
                                    <h4 class="accordion-header" id="headingFour44">
                                       <button class="accordion-buttons collapsed" type="button"
                                          data-bs-toggle="collapse" data-bs-target="#collapseFour44"
                                          aria-expanded="false" aria-controls="collapseFour44">
                                        Do you provide theme updates?                          
                                       </button>
                                    </h4>
                                    <div id="collapseFour44" class="accordion-collapse collapse"
                                       aria-labelledby="headingFour44" data-bs-parent="#accordionExample2">
                                       <div class="accordion-body">
                                          <p class="mb-0">This theme is specifically designed for educational institutions, online 
                                          courses, schools, universities, and e-learning platforms. If you want to
                                          build a Education or E-learning website Educeet is a perfect theme.</p>
                                       </div>
                                    </div>
                                 </div>
                                 <div class="accordion-items mb-30">
                                    <h4 class="accordion-header" id="headingFour55">
                                       <button class="accordion-buttons collapsed" type="button"
                                          data-bs-toggle="collapse" data-bs-target="#collapseFour55"
                                          aria-expanded="false" aria-controls="collapseFour4">
                                          Are your services available globally?                      
                                       </button>
                                    </h4>
                                    <div id="collapseFour55" class="accordion-collapse collapse"
                                       aria-labelledby="headingFour55" data-bs-parent="#accordionExample2">
                                       <div class="accordion-body">
                                          <p class="mb-0">This theme is specifically designed for educational institutions, online 
                                          courses, schools, universities, and e-learning platforms. If you want to
                                          build a Education or E-learning website Educeet is a perfect theme.</p>
                                       </div>
                                    </div>
                                 </div>
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
                  <div class="tab-pane fade" id="instructor" role="tabpanel" aria-labelledby="instructor-tab">
                     <div class="row gx-35">
                        <div class="col-xl-4 col-lg-4 col-md-4">
                           <div class="it-faq-tab-content">
                              <h5 class="it-details-title-sm mb-25">Related Topics</h5>
                              <ul class="mb-35">
                                 <li><a href="#">Account/Profile (1)</a></li>
                                 <li><a href="#">Course Taking (2)</a></li>
                                 <li><a href="#">Getting Started (1)</a></li>
                                 <li><a href="#">Mobile (1)</a></li>
                                 <li><a href="#">Purchase/Refunds (3)</a></li>
                                 <li><a href="#">Troubleshooting (2)</a></li>
                              </ul>
                              <a href="contact-us.html" class="it-btn-yellow theme-bg">
                                 <span>
                                    <span class="text-1">Contact Us</span>
                                    <span class="text-2">Contact Us</span>
                                 </span>
                                 <i>
                                    <svg width="16" height="15" viewBox="0 0 16 15" fill="none" xmlns="http://www.w3.org/2000/svg">
                                       <path d="M15.0544 8.1364C15.4058 7.78492 15.4058 7.21508 15.0544 6.8636L9.3268 1.13604C8.97533 0.784567 8.40548 0.784567 8.05401 1.13604C7.70254 1.48751 7.70254 2.05736 8.05401 2.40883L13.1452 7.5L8.05401 12.5912C7.70254 12.9426 7.70254 13.5125 8.05401 13.864C8.40548 14.2154 8.97533 14.2154 9.3268 13.864L15.0544 8.1364ZM0.417969 7.5V8.4H14.418V7.5V6.6H0.417969V7.5Z" fill="currentcolor" />
                                    </svg>
                                 </i>
                              </a>
                           </div>
                        </div>
                        <div class="col-xl-8 col-lg-8 col-md-8">
                           <div class="it-custom-accordion">
                              <div class="accordion" id="accordionExample3">
                                 <div class="accordion-items mb-30">
                                    <h4 class="accordion-header" id="headingOne20">
                                       <button class="accordion-buttons " type="button" data-bs-toggle="collapse"
                                          data-bs-target="#collapseOne20" aria-expanded="true"
                                          aria-controls="collapseOne20">
                                         What is this theme designed for?                         
                                       </button>
                                    </h4>
                                    <div id="collapseOne20" class="accordion-collapse collapse show"
                                       aria-labelledby="headingOne20" data-bs-parent="#accordionExample3">
                                       <div class="accordion-body">
                                          <p class="mb-0">This theme is specifically designed for educational institutions, online 
                                          courses, schools, universities, and e-learning platforms. If you want to
                                          build a Education or E-learning website Educeet is a perfect theme.</p>
                                       </div>
                                    </div>
                                 </div>
                                 <div class="accordion-items mb-30">
                                    <h4 class="accordion-header" id="headingTwo30">
                                       <button class="accordion-buttons collapsed" type="button"
                                          data-bs-toggle="collapse" data-bs-target="#collapseTwo30" aria-expanded="false"
                                          aria-controls="collapseTwo30">
                                        Is this theme compatible with Elementor?                         
                                       </button>
                                    </h4>
                                    <div id="collapseTwo30" class="accordion-collapse collapse"
                                       aria-labelledby="headingTwo30" data-bs-parent="#accordionExample3">
                                       <div class="accordion-body">
                                          <p class="mb-0">This theme is specifically designed for educational institutions, online 
                                          courses, schools, universities, and e-learning platforms. If you want to
                                          build a Education or E-learning website Educeet is a perfect theme.</p>
                                       </div>
                                    </div>
                                 </div>
                                 <div class="accordion-items mb-30">
                                    <h4 class="accordion-header" id="headingFour40">
                                       <button class="accordion-buttons collapsed" type="button"
                                          data-bs-toggle="collapse" data-bs-target="#collapseFour40"
                                          aria-expanded="false" aria-controls="collapseFour40">
                                         Why do we need to use LMS plugins?                      
                                       </button>
                                    </h4>
                                    <div id="collapseFour40" class="accordion-collapse collapse"
                                       aria-labelledby="headingFour40" data-bs-parent="#accordionExample3">
                                       <div class="accordion-body">
                                          <p class="mb-0">This theme is specifically designed for educational institutions, online 
                                          courses, schools, universities, and e-learning platforms. If you want to
                                          build a Education or E-learning website Educeet is a perfect theme.</p>
                                       </div>
                                    </div>
                                 </div>
                                 <div class="accordion-items mb-30">
                                    <h4 class="accordion-header" id="headingFour50">
                                       <button class="accordion-buttons collapsed" type="button"
                                          data-bs-toggle="collapse" data-bs-target="#collapseFour50"
                                          aria-expanded="false" aria-controls="collapseFour50">
                                         Do you offer a free trial for Educeet Theme?                       
                                       </button>
                                    </h4>
                                    <div id="collapseFour50" class="accordion-collapse collapse"
                                       aria-labelledby="headingFour50" data-bs-parent="#accordionExample3">
                                       <div class="accordion-body">
                                          <p class="mb-0">This theme is specifically designed for educational institutions, online 
                                          courses, schools, universities, and e-learning platforms. If you want to
                                          build a Education or E-learning website Educeet is a perfect theme.</p>
                                       </div>
                                    </div>
                                 </div>
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </div>
   </div>  
   <!-- faq-area-end -->

   <!-- newsletter-area-start -->
   <div class="it-newsletter-area">
      <div class="container">
         <div class="it-newsletter-wrap theme-bg z-index-2 wow itfadeUp" data-wow-duration=".9s"
                  data-wow-delay=".3s">
            <img class="it-newsletter-shape-1" src="assets/img/shape/newsletter-2-1.png" alt="">
            <div class="row align-items-center">
               <div class="col-lg-6">
                  <div class="it-newsletter-2-left">
                     <h4 class="it-newsletter-2-title text-white mb-0">Sign Up today to get the <br> latest inspiration & insights</h4>
                  </div>
               </div>
               <div class="col-lg-6">
                  <div class="it-newsletter-input-box">
                     <form class="input-wrap p-relative" action="#">
                        <input type="email" placeholder="Enter your Email Address">
                        <button type="submit">
                           <svg width="26" height="27" viewBox="0 0 26 27" fill="none" xmlns="http://www.w3.org/2000/svg">
                              <path d="M24.7282 1.82586C24.3517 1.44485 23.8834 1.16736 23.3684 1.02022C22.8534 0.873071 22.3091 0.861239 21.7882 0.985864L4.9882 4.52436C4.0207 4.65705 3.10947 5.05722 2.35711 5.6798C1.60475 6.30238 1.04115 7.12265 0.729789 8.04823C0.418424 8.97381 0.371658 9.96795 0.594756 10.9187C0.817855 11.8694 1.30196 12.739 1.99255 13.4294L3.79645 15.2323C3.89408 15.3299 3.97151 15.4458 4.0243 15.5733C4.07709 15.7009 4.1042 15.8376 4.1041 15.9757V19.3021C4.10641 19.7698 4.21408 20.2309 4.4191 20.6513L4.4107 20.6587L4.438 20.686C4.74566 21.3045 5.24816 21.8048 5.8681 22.1098L5.8954 22.1371L5.90275 22.1287C6.32312 22.3337 6.78429 22.4413 7.252 22.4437H10.5784C10.8567 22.4434 11.1237 22.5537 11.3207 22.7503L13.1236 24.5531C13.6071 25.042 14.1827 25.4304 14.817 25.6958C15.4514 25.9613 16.132 26.0986 16.8196 26.0998C17.3926 26.0991 17.9618 26.0054 18.5048 25.8226C19.422 25.5214 20.2367 24.97 20.8571 24.2305C21.4775 23.4909 21.8789 22.5928 22.016 21.6373L25.5598 4.80051C25.6909 4.27514 25.6832 3.72471 25.5374 3.20322C25.3916 2.68173 25.1127 2.20709 24.7282 1.82586ZM5.28325 13.7497L3.4783 11.9468C3.058 11.5366 2.76343 11.0151 2.62915 10.4434C2.49487 9.87166 2.52645 9.27351 2.7202 8.71911C2.90804 8.15035 3.25528 7.64751 3.72063 7.27039C4.18598 6.89327 4.74986 6.65774 5.3452 6.59181L21.9782 3.09006L6.202 18.8684V15.9757C6.20359 15.5623 6.12321 15.1528 5.96551 14.7707C5.80781 14.3886 5.57591 14.0416 5.28325 13.7497ZM19.9528 21.2782C19.8722 21.8581 19.6315 22.4041 19.2578 22.8549C18.8841 23.3056 18.3921 23.6433 17.8372 23.83C17.2822 24.0167 16.6862 24.045 16.116 23.9118C15.5459 23.7786 15.0241 23.4891 14.6093 23.0758L12.8033 21.2698C12.5118 20.9767 12.1651 20.7443 11.7832 20.586C11.4013 20.4278 10.9918 20.3468 10.5784 20.3479H7.68565L23.464 4.57476L19.9528 21.2782Z" fill="currentcolor" />
                           </svg>
                        </button>
                     </form>
                  </div>
               </div>
            </div>
         </div>
      </div>
   </div>
   <!-- newsletter-area-end -->

@endsection