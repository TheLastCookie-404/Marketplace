<?php
  include './handler/connect.php';
?>

<!DOCTYPE html>
<html lang="en" class="scroll-smooth">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Marketplace</title>
  <link rel="stylesheet" href="../tailwind/output.css" />
  <link rel="stylesheet" href="../swiper/styles/swiper.css" />
</head>

<body data-theme="red">
  <!-- or (data-theme="base") to change theme back -->

  <!-- Header -->
  <header id="header" class="drawer py-3.5 2xl:px-40 xs:px-10 px-5 header-overflow">
    <input id="my-drawer-3" type="checkbox" class="drawer-toggle" />
    <div class="drawer-content flex">
      <!-- Navbar -->
      <div class="w-full navbar p-0 bg-base-100">
        <div class="flex-1">
          <a class="w-full">
            <svg class="fill-accent max-w-64" viewBox="0 0 325 100" xmlns="http://www.w3.org/2000/svg">
              <path
                d="M1.03073 23.807L43.0307 0.537022C43.6337 0.202933 44.3663 0.202933 44.9693 0.537022L86.9693 23.807C87.6053 24.1594 88 24.8293 88 25.5565V72.9852C88 73.6941 87.6248 74.35 87.0137 74.7093L45.0137 99.404C44.388 99.7719 43.612 99.7719 42.9863 99.404L0.986301 74.7093C0.37523 74.35 0 73.6941 0 72.9852V25.5565C0 24.8293 0.394672 24.1594 1.03073 23.807Z" />
              <path class="fill-base-content"
                d="M99.456 43.92V27.888L97.392 27.696V26.808H109.8L110.064 30.144L109.152 30.168L108.6 27.936L101.184 27.792V35.232L106.608 35.136L106.992 33.312H107.904V38.232H106.896L106.608 36.288L101.184 36.192V43.944L104.808 44.136V45H97.224V44.208L99.456 43.92ZM112.212 43.944L118.524 26.712H119.94L126.06 43.944L128.004 44.208V45H122.292V44.208L124.26 43.944L122.772 39.672H115.212L113.748 43.944L115.788 44.208V45H110.508V44.208L112.212 43.944ZM119.892 31.416L119.028 28.68L115.572 38.592H122.412L119.892 31.416ZM135.121 45.264C134.049 45.264 132.985 45.152 131.929 44.928C130.873 44.704 130.153 44.48 129.769 44.256V40.752H130.633L131.185 43.152C131.617 43.584 132.209 43.888 132.961 44.064C133.729 44.24 134.521 44.328 135.337 44.328C136.489 44.328 137.473 44.048 138.289 43.488C139.121 42.912 139.537 42.032 139.537 40.848C139.537 40.176 139.329 39.584 138.913 39.072C138.513 38.544 138.001 38.088 137.377 37.704C136.753 37.32 135.945 36.888 134.953 36.408C133.897 35.896 133.017 35.424 132.313 34.992C131.625 34.544 131.049 34.008 130.585 33.384C130.121 32.76 129.889 32.032 129.889 31.2C129.889 30.176 130.177 29.32 130.753 28.632C131.345 27.944 132.073 27.44 132.937 27.12C133.817 26.8 134.697 26.64 135.577 26.64C136.649 26.64 137.561 26.736 138.313 26.928C139.065 27.104 139.657 27.32 140.089 27.576V30.696H139.297L138.601 28.368C137.977 27.824 136.921 27.552 135.433 27.552C134.809 27.552 134.193 27.672 133.585 27.912C132.993 28.136 132.497 28.504 132.097 29.016C131.697 29.528 131.497 30.168 131.497 30.936C131.497 31.56 131.689 32.112 132.073 32.592C132.457 33.072 132.937 33.488 133.513 33.84C134.105 34.192 134.873 34.592 135.817 35.04C136.953 35.584 137.881 36.08 138.601 36.528C139.321 36.96 139.929 37.496 140.425 38.136C140.921 38.776 141.169 39.528 141.169 40.392C141.169 42.024 140.601 43.248 139.465 44.064C138.345 44.864 136.897 45.264 135.121 45.264ZM145.623 43.92V27.864L143.679 27.696V26.808H149.247V27.696L147.351 27.864V35.688H157.167V27.864L155.247 27.696V26.808H160.743V27.696L158.895 27.864V43.92L160.935 44.208V45H155.175V44.208L157.167 43.944V36.768H147.351V43.944L149.343 44.208V45H143.607V44.208L145.623 43.92ZM165.928 43.944V27.864L163.984 27.696V26.808H169.624V27.696L167.656 27.864V43.944L169.72 44.208V45H163.936V44.208L165.928 43.944ZM180.905 26.64C182.409 26.64 183.737 27.016 184.889 27.768C186.041 28.52 186.929 29.568 187.553 30.912C188.177 32.256 188.489 33.784 188.489 35.496C188.489 37.528 188.121 39.288 187.385 40.776C186.649 42.264 185.649 43.4 184.385 44.184C183.137 44.952 181.753 45.336 180.233 45.336C178.665 45.336 177.281 44.944 176.081 44.16C174.881 43.376 173.961 42.288 173.321 40.896C172.681 39.504 172.369 37.92 172.385 36.144C172.433 34.176 172.833 32.48 173.585 31.056C174.337 29.632 175.353 28.536 176.633 27.768C177.913 27.016 179.337 26.64 180.905 26.64ZM180.545 27.624C179.329 27.624 178.249 27.96 177.305 28.632C176.361 29.304 175.625 30.28 175.097 31.56C174.569 32.84 174.305 34.368 174.305 36.144C174.305 37.696 174.561 39.096 175.073 40.344C175.585 41.592 176.313 42.576 177.257 43.296C178.201 44 179.305 44.352 180.569 44.352C181.769 44.352 182.825 44 183.737 43.296C184.649 42.592 185.353 41.592 185.849 40.296C186.361 39 186.617 37.48 186.617 35.736C186.617 34.216 186.377 32.848 185.897 31.632C185.417 30.4 184.721 29.424 183.809 28.704C182.897 27.984 181.809 27.624 180.545 27.624ZM208.092 27.768L206.052 27.96V45H204.156L195.828 31.968L194.1 28.68L194.076 43.944L196.5 44.208V45H190.74V44.208L192.804 43.944V27.96L190.812 27.792V26.808H194.628L203.052 40.32L204.78 43.488V27.96L202.74 27.768V26.808H208.092V27.768ZM220.588 24.144V47.184H219.052V24.144H220.588ZM234.29 43.92V27.888L232.226 27.696V26.808H235.13C235.818 26.808 236.658 26.776 237.65 26.712C237.89 26.696 238.21 26.68 238.61 26.664C239.026 26.648 239.394 26.64 239.714 26.64C242.61 26.64 244.794 27.408 246.266 28.944C247.754 30.464 248.498 32.624 248.498 35.424C248.498 37.408 248.106 39.136 247.322 40.608C246.554 42.064 245.466 43.184 244.058 43.968C242.666 44.736 241.066 45.12 239.258 45.12C238.89 45.12 238.258 45.104 237.362 45.072C236.626 45.024 235.89 45 235.154 45H232.178V44.208L234.29 43.92ZM236.018 43.824C237.202 44.032 238.29 44.128 239.282 44.112C240.658 44.08 241.906 43.768 243.026 43.176C244.146 42.568 245.034 41.656 245.69 40.44C246.362 39.224 246.698 37.712 246.698 35.904C246.698 33.216 246.066 31.176 244.802 29.784C243.554 28.376 241.77 27.672 239.45 27.672C238.17 27.672 237.026 27.744 236.018 27.888V43.824ZM256.761 45.264C255.689 45.264 254.625 45.152 253.569 44.928C252.513 44.704 251.793 44.48 251.409 44.256V40.752H252.273L252.825 43.152C253.257 43.584 253.849 43.888 254.601 44.064C255.369 44.24 256.161 44.328 256.977 44.328C258.129 44.328 259.113 44.048 259.929 43.488C260.761 42.912 261.177 42.032 261.177 40.848C261.177 40.176 260.969 39.584 260.553 39.072C260.153 38.544 259.641 38.088 259.017 37.704C258.393 37.32 257.585 36.888 256.593 36.408C255.537 35.896 254.657 35.424 253.953 34.992C253.265 34.544 252.689 34.008 252.225 33.384C251.761 32.76 251.529 32.032 251.529 31.2C251.529 30.176 251.817 29.32 252.393 28.632C252.985 27.944 253.713 27.44 254.577 27.12C255.457 26.8 256.337 26.64 257.217 26.64C258.289 26.64 259.201 26.736 259.953 26.928C260.705 27.104 261.297 27.32 261.729 27.576V30.696H260.937L260.241 28.368C259.617 27.824 258.561 27.552 257.073 27.552C256.449 27.552 255.833 27.672 255.225 27.912C254.633 28.136 254.137 28.504 253.737 29.016C253.337 29.528 253.137 30.168 253.137 30.936C253.137 31.56 253.329 32.112 253.713 32.592C254.097 33.072 254.577 33.488 255.153 33.84C255.745 34.192 256.513 34.592 257.457 35.04C258.593 35.584 259.521 36.08 260.241 36.528C260.961 36.96 261.569 37.496 262.065 38.136C262.561 38.776 262.809 39.528 262.809 40.392C262.809 42.024 262.241 43.248 261.105 44.064C259.985 44.864 258.537 45.264 256.761 45.264ZM270.768 43.92V27.792L265.896 27.984L265.176 30.336L264.36 30.36L264.648 26.808H278.592L278.568 30.408L277.824 30.504L277.344 27.984L272.496 27.792V43.92L275.736 44.208V45H267.696V44.208L270.768 43.92ZM286.203 43.92V37.488L280.443 27.864L279.027 27.696V26.808H284.403V27.696L282.435 27.864L286.563 35.28L287.187 36.528L287.763 35.28L291.507 27.888L289.491 27.696V26.808H294.555V27.696L292.971 27.96L287.931 37.536V43.92L290.403 44.208V45H283.827V44.208L286.203 43.92ZM298.087 43.92V27.96L296.023 27.792V26.808H302.095V27.792L299.815 27.96L299.791 43.992L306.895 43.776L308.167 40.896L308.959 41.28L308.191 45H295.975V44.208L298.087 43.92ZM312.617 43.944V27.888L310.553 27.696V26.808H322.697L323.033 30.144H322.049L321.497 27.888L314.321 27.744V34.872L319.121 34.776L319.409 32.904H320.345V37.872H319.409L319.121 35.904L314.321 35.832V44.016L322.049 43.824L323.105 41.088L323.969 41.304L323.441 45H310.505V44.208L312.617 43.944Z" />
              <path class="fill-white"
                d="M16.184 64.38V40.332L13.088 40.044V38.712H31.7L32.096 43.716L30.728 43.752L29.9 40.404L18.776 40.188V51.348L26.912 51.204L27.488 48.468H28.856V55.848H27.344L26.912 52.932L18.776 52.788V64.416L24.212 64.704V66H12.836V64.812L16.184 64.38ZM41.3306 34.716V69.276H39.0266V34.716H41.3306ZM53.0947 64.38V40.332L49.9987 40.044V38.712H54.3547C55.3867 38.712 56.6467 38.664 58.1347 38.568C58.4947 38.544 58.9747 38.52 59.5747 38.496C60.1987 38.472 60.7507 38.46 61.2307 38.46C65.5747 38.46 68.8507 39.612 71.0587 41.916C73.2907 44.196 74.4067 47.436 74.4067 51.636C74.4067 54.612 73.8187 57.204 72.6427 59.412C71.4907 61.596 69.8587 63.276 67.7467 64.452C65.6587 65.604 63.2587 66.18 60.5467 66.18C59.9947 66.18 59.0467 66.156 57.7027 66.108C56.5987 66.036 55.4947 66 54.3907 66H49.9267V64.812L53.0947 64.38ZM55.6867 64.236C57.4627 64.548 59.0947 64.692 60.5827 64.668C62.6467 64.62 64.5187 64.152 66.1987 63.264C67.8787 62.352 69.2107 60.984 70.1947 59.16C71.2027 57.336 71.7067 55.068 71.7067 52.356C71.7067 48.324 70.7587 45.264 68.8627 43.176C66.9907 41.064 64.3147 40.008 60.8347 40.008C58.9147 40.008 57.1987 40.116 55.6867 40.332V64.236Z" />
              <path class="fill-base-content"
                d="M98.048 73.296L98.848 62.64L97.28 62.512V61.872H100.496L103.632 71.072L103.952 72.16L104.304 71.056L107.264 61.872H110.288V62.512L108.736 62.64L109.664 73.296L111.184 73.472V74H107.072V73.472L108.576 73.296L107.888 65.264L107.776 62.608L107.36 64.096L104 74.112H103.6L100.352 64.944C100.16 64.4213 99.968 63.856 99.776 63.248L99.552 62.608L99.424 65.68L98.992 73.28L100.656 73.472V74H96.608V73.472L98.048 73.296ZM115.806 65.104C116.744 65.104 117.486 65.3173 118.03 65.744C118.584 66.16 118.862 66.9013 118.862 67.968L118.846 73.44H119.87V73.872C119.507 74.0427 119.059 74.128 118.526 74.128C118.206 74.128 118.003 74.0587 117.918 73.92C117.832 73.7813 117.79 73.4933 117.79 73.056C117.139 73.8027 116.2 74.176 114.974 74.176C114.515 74.176 114.083 74.08 113.678 73.888C113.283 73.696 112.963 73.4187 112.718 73.056C112.472 72.6933 112.35 72.2613 112.35 71.76C112.35 71.0347 112.638 70.4533 113.214 70.016C113.8 69.5787 114.499 69.2693 115.31 69.088C116.131 68.896 116.936 68.8 117.726 68.8V68.112C117.726 67.2907 117.534 66.72 117.15 66.4C116.766 66.0693 116.19 65.904 115.422 65.904C115.038 65.904 114.595 65.9733 114.094 66.112C113.592 66.2507 113.198 66.416 112.91 66.608L112.686 66.048C113.038 65.76 113.534 65.5307 114.174 65.36C114.814 65.1893 115.358 65.104 115.806 65.104ZM117.726 69.44C116.659 69.44 115.683 69.6107 114.798 69.952C113.923 70.2827 113.486 70.8267 113.486 71.584C113.475 72.2027 113.656 72.6613 114.03 72.96C114.403 73.2587 114.91 73.408 115.549 73.408C116.35 73.408 117.075 73.136 117.726 72.592V69.44ZM122.567 73.328V66.432L121.415 66.016V65.632L123.271 65.152L123.559 65.296V66.368C123.964 66.048 124.514 65.7547 125.207 65.488C125.9 65.2107 126.508 65.072 127.031 65.072C127.65 65.072 128.14 65.1947 128.503 65.44C128.866 65.6853 129.127 66.08 129.287 66.624C129.447 67.168 129.527 67.8987 129.527 68.816V73.328L130.791 73.472V74H127.191V73.472L128.391 73.328V68.96C128.391 68.224 128.332 67.6427 128.215 67.216C128.108 66.7787 127.916 66.4587 127.639 66.256C127.372 66.0533 126.999 65.952 126.519 65.952C126.103 65.952 125.634 66.0427 125.111 66.224C124.588 66.3947 124.119 66.624 123.703 66.912V73.328L124.935 73.472V74H121.447V73.472L122.567 73.328ZM133.713 71.824C134.236 71.952 134.636 72.256 134.913 72.736C135.191 73.216 135.329 73.712 135.329 74.224C135.34 75.0453 135.105 75.7653 134.625 76.384C134.145 77.0027 133.58 77.4453 132.929 77.712L132.657 77.36V77.184C132.903 77.0987 133.148 76.928 133.393 76.672C133.639 76.4267 133.841 76.128 134.001 75.776C134.161 75.424 134.241 75.0613 134.241 74.688C134.241 74.2187 134.124 73.8187 133.889 73.488C133.665 73.1573 133.399 72.9707 133.089 72.928V72.64L133.713 71.824ZM140.688 62.464V61.872H144.592V62.464L143.04 62.576L145.792 71.328L146.256 72.784L146.688 71.392L148.56 64L148.144 62.576L146.848 62.464V61.872H150.848V62.464L149.36 62.576L151.728 71.424L152.096 72.832L152.464 71.232L154.752 62.576L153.328 62.464V61.872H156.976V62.464L155.728 62.576L152.368 74.16H151.44L148.992 65.568L146.656 74.16H145.664L141.76 62.576L140.688 62.464ZM162.07 64.992C162.934 64.992 163.649 65.2 164.214 65.616C164.79 66.0213 165.211 66.5653 165.478 67.248C165.755 67.9307 165.894 68.6773 165.894 69.488C165.883 70.3947 165.697 71.2053 165.334 71.92C164.982 72.6347 164.497 73.1947 163.878 73.6C163.27 73.9947 162.587 74.192 161.83 74.192C160.934 74.192 160.193 73.984 159.606 73.568C159.019 73.1413 158.587 72.5813 158.31 71.888C158.033 71.184 157.894 70.4053 157.894 69.552C157.894 68.6453 158.081 67.8453 158.454 67.152C158.838 66.4587 159.35 65.9253 159.99 65.552C160.63 65.1787 161.323 64.992 162.07 64.992ZM161.894 65.648C161.019 65.648 160.331 65.9787 159.83 66.64C159.339 67.3013 159.094 68.2187 159.094 69.392C159.094 70.5973 159.334 71.584 159.814 72.352C160.294 73.12 161.019 73.504 161.99 73.504C162.865 73.504 163.531 73.168 163.99 72.496C164.459 71.8133 164.694 70.8373 164.694 69.568C164.694 68.4053 164.465 67.4613 164.006 66.736C163.547 66.0107 162.843 65.648 161.894 65.648ZM168.88 73.328V66.432L167.728 66.016V65.616L169.6 65.152L169.872 65.296V66.368C170.277 66.048 170.794 65.76 171.424 65.504C172.064 65.248 172.64 65.1147 173.152 65.104C173.717 65.0933 174.17 65.1733 174.512 65.344C174.853 65.5147 175.114 65.7973 175.296 66.192C175.658 65.9147 176.181 65.664 176.864 65.44C177.546 65.216 178.144 65.104 178.656 65.104C179.264 65.104 179.744 65.2267 180.096 65.472C180.448 65.7173 180.698 66.112 180.848 66.656C181.008 67.1893 181.088 67.9147 181.088 68.832V73.328L182.4 73.472V74H178.848V73.472L179.968 73.328V69.024C179.968 68.2667 179.92 67.6747 179.824 67.248C179.728 66.8107 179.541 66.4853 179.264 66.272C178.986 66.0587 178.576 65.952 178.032 65.952C177.637 65.952 177.21 66.0267 176.752 66.176C176.293 66.3147 175.872 66.496 175.488 66.72C175.616 67.232 175.68 67.9093 175.68 68.752V73.328L176.912 73.472V74H173.36V73.472L174.56 73.328V68.88C174.56 68.144 174.512 67.5733 174.416 67.168C174.33 66.7627 174.16 66.464 173.904 66.272C173.648 66.0693 173.264 65.968 172.752 65.968C172.357 65.968 171.904 66.0533 171.391 66.224C170.89 66.3947 170.432 66.624 170.016 66.912V73.328L171.248 73.472V74H167.776V73.472L168.88 73.328ZM187.227 65.104C188.166 65.104 188.907 65.3173 189.451 65.744C190.006 66.16 190.283 66.9013 190.283 67.968L190.267 73.44H191.291V73.872C190.929 74.0427 190.481 74.128 189.947 74.128C189.627 74.128 189.425 74.0587 189.339 73.92C189.254 73.7813 189.211 73.4933 189.211 73.056C188.561 73.8027 187.622 74.176 186.395 74.176C185.937 74.176 185.505 74.08 185.099 73.888C184.705 73.696 184.385 73.4187 184.139 73.056C183.894 72.6933 183.771 72.2613 183.771 71.76C183.771 71.0347 184.059 70.4533 184.635 70.016C185.222 69.5787 185.921 69.2693 186.731 69.088C187.553 68.896 188.358 68.8 189.147 68.8V68.112C189.147 67.2907 188.955 66.72 188.571 66.4C188.187 66.0693 187.611 65.904 186.843 65.904C186.459 65.904 186.017 65.9733 185.515 66.112C185.014 66.2507 184.619 66.416 184.331 66.608L184.107 66.048C184.459 65.76 184.955 65.5307 185.595 65.36C186.235 65.1893 186.779 65.104 187.227 65.104ZM189.147 69.44C188.081 69.44 187.105 69.6107 186.219 69.952C185.345 70.2827 184.907 70.8267 184.907 71.584C184.897 72.2027 185.078 72.6613 185.451 72.96C185.825 73.2587 186.331 73.408 186.971 73.408C187.771 73.408 188.497 73.136 189.147 72.592V69.44ZM193.989 73.328V66.432L192.837 66.016V65.632L194.693 65.152L194.981 65.296V66.368C195.386 66.048 195.936 65.7547 196.629 65.488C197.322 65.2107 197.93 65.072 198.453 65.072C199.072 65.072 199.562 65.1947 199.925 65.44C200.288 65.6853 200.549 66.08 200.709 66.624C200.869 67.168 200.949 67.8987 200.949 68.816V73.328L202.213 73.472V74H198.613V73.472L199.813 73.328V68.96C199.813 68.224 199.754 67.6427 199.637 67.216C199.53 66.7787 199.338 66.4587 199.061 66.256C198.794 66.0533 198.421 65.952 197.941 65.952C197.525 65.952 197.056 66.0427 196.533 66.224C196.01 66.3947 195.541 66.624 195.125 66.912V73.328L196.357 73.472V74H192.869V73.472L193.989 73.328Z" />
            </svg>
          </a>
        </div>
        <div class="dropdown">
          <div tabindex="0" role="button"
            class="btn btn-ghost btn-navig navig-hover border-2 border-accent group mx-8 md:flex sm:hidden hidden">
            <svg class="w-5 h-5" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
              <path class="fill-accent group-hover:fill-primary"
                d="M0 0h9v9H0Z M11 0h9v9H11Z M11 11h9v9H11Z M0 11h9v9H0Z" />
            </svg>
            <span class="mx-3">Каталог одежды</span>
          </div>
          <ul tabindex="0" class="dropdown-content top-12 left-8 z-50 menu p-2 shadow bg-base-100 rounded-box w-fit">
            <li><a href="#women">Женщинам</a></li>
            <li><a href="#men">Мужчинам</a></li>
            <li><a href="#sale">Распродажа</a></li>
            <li><a href="#popular">Популярное</a></li>
          </ul>
        </div>
        <div class="flex-none hidden xl:block">
          <ul class="menu menu-horizontal px-1 gap-1">
            <li><a href="#about" class="btn btn-ghost btn-navig navig-hover">О нас</a></li>
            <li><a href="#sale" class="btn btn-ghost btn-navig navig-hover">Распродажа</a></li>
            <li><a href="#popular" class="btn btn-ghost btn-navig navig-hover">Популярное</a></li>
            <li><a href="#contacts" class="btn btn-ghost btn-navig navig-hover">Контакты</a></li>
            <li><a href="https://webk.telegram.org" target="_blank" class="btn btn-ghost btn-navig p-2"><img
                  src="./assets/icons/telegram.svg" alt=""></a></li>
            <li><a href="https://vk.com/feed" target="_blank" class="btn btn-ghost btn-navig p-2"><img
                  src="./assets/icons/vk.svg" alt=""></a></li>
            <li class="relative text-xxs font-sans text-white font-bold">
              <a href="#" class="btn btn-ghost btn-navig p-2"><img src="./assets/icons/heart.svg" alt=""></a>
              <div
                class="h-3.5 w-fit p-1 box-border rounded-full absolute z-10 right-1 bottom-1 pointer-events-none bg-accent grid place-content-center">
                8</div>
            </li>
            <li class="relative text-xxs font-sans text-white font-bold" onclick="my_modal_1.showModal()">
              <a href="#" class="btn btn-ghost btn-navig p-2"><img src="./assets/icons/basket.svg" alt=""></a>
              <div
                class="h-3.5 w-fit p-1 box-border rounded-full absolute z-10 right-1 bottom-1 pointer-events-none bg-accent grid place-content-center">
                3</div>
            </li>
          </ul>
        </div>
        <div class="xl:hidden flex-none pl-3">
          <label for="my-drawer-3" aria-label="open sidebar" class="btn btn-square btn-ghost rounded-lg">
            <img src="./assets/icons/drawer-btn.svg" alt="">
          </label>
        </div>
      </div>
    </div>

    <!-- Drawer -->
    <div class="drawer-side z-50 w-full h-full">
      <label for="my-drawer-3" aria-label="close sidebar" class="drawer-overlay"></label>
      <ul class="menu xs:w-80 w-full gap-3 p-4 min-h-full bg-base-200 text-xl">
        <li class="self-end mb-4">
          <label for="my-drawer-3" aria-label="close sidebar" class="btn btn-square btn-ghost rounded-lg">
            <svg class="w-10 h-10" viewBox="0 -0.5 25 25" fill="none" xmlns="http://www.w3.org/2000/svg">
              <path class="fill-base-content"
                d="M6.96967 16.4697C6.67678 16.7626 6.67678 17.2374 6.96967 17.5303C7.26256 17.8232 7.73744 17.8232 8.03033 17.5303L6.96967 16.4697ZM13.0303 12.5303C13.3232 12.2374 13.3232 11.7626 13.0303 11.4697C12.7374 11.1768 12.2626 11.1768 11.9697 11.4697L13.0303 12.5303ZM11.9697 11.4697C11.6768 11.7626 11.6768 12.2374 11.9697 12.5303C12.2626 12.8232 12.7374 12.8232 13.0303 12.5303L11.9697 11.4697ZM18.0303 7.53033C18.3232 7.23744 18.3232 6.76256 18.0303 6.46967C17.7374 6.17678 17.2626 6.17678 16.9697 6.46967L18.0303 7.53033ZM13.0303 11.4697C12.7374 11.1768 12.2626 11.1768 11.9697 11.4697C11.6768 11.7626 11.6768 12.2374 11.9697 12.5303L13.0303 11.4697ZM16.9697 17.5303C17.2626 17.8232 17.7374 17.8232 18.0303 17.5303C18.3232 17.2374 18.3232 16.7626 18.0303 16.4697L16.9697 17.5303ZM11.9697 12.5303C12.2626 12.8232 12.7374 12.8232 13.0303 12.5303C13.3232 12.2374 13.3232 11.7626 13.0303 11.4697L11.9697 12.5303ZM8.03033 6.46967C7.73744 6.17678 7.26256 6.17678 6.96967 6.46967C6.67678 6.76256 6.67678 7.23744 6.96967 7.53033L8.03033 6.46967ZM8.03033 17.5303L13.0303 12.5303L11.9697 11.4697L6.96967 16.4697L8.03033 17.5303ZM13.0303 12.5303L18.0303 7.53033L16.9697 6.46967L11.9697 11.4697L13.0303 12.5303ZM11.9697 12.5303L16.9697 17.5303L18.0303 16.4697L13.0303 11.4697L11.9697 12.5303ZM13.0303 11.4697L8.03033 6.46967L6.96967 7.53033L11.9697 12.5303L13.0303 11.4697Z" />
            </svg>
          </label>
        </li>
        <li>
          <a class="btn btn-ghost btn-navig text-xl justify-start p-4">
            <img src="./assets/icons/heart.svg" alt="">
            <span class="text-xl ml-4">Понравившееся</span>
            <span class="bg-accent rounded-lg px-2 py-0.5 text-sm text-neutral font-sans font-medium">8</span>
          </a>
        </li>
        <li onclick="my_modal_1.showModal()">
          <a class="btn btn-ghost btn-navig text-xl justify-start p-4">
            <img src="./assets/icons/basket.svg" alt="">
            <span class="text-xl ml-4">Корзина</span>
            <span class="bg-accent rounded-lg px-2 py-0.5 text-sm text-neutral font-sans font-medium">3</span>
          </a>
        </li>
        <div class="divider md:hidden flex">Каталог</div>
        <li class="md:hidden flex"><a href="#women"
            class="btn btn-ghost btn-navig text-xl justify-start navig-hover">Женщинам</a></li>
        <li class="md:hidden flex"><a href="#men"
            class="btn btn-ghost btn-navig text-xl justify-start navig-hover">Мужчинам</a></li>
        <li class="md:hidden flex"><a href="#sale"
            class="btn btn-ghost btn-navig text-xl justify-start navig-hover">Распродажа</a></li>
        <li class="md:hidden flex"><a href="#"
            class="btn btn-ghost btn-navig text-xl justify-start navig-hover">Популярное</a></li>
        <div class="divider"></div>
        <li><a class="btn btn-ghost btn-navig text-xl justify-start navig-hover">О нас</a></li>
        <li><a class="btn btn-ghost btn-navig text-xl justify-start navig-hover">Распродажа</a></li>
        <li><a class="btn btn-ghost btn-navig text-xl justify-start navig-hover">Популярное</a></li>
        <li><a class="btn btn-ghost btn-navig text-xl justify-start navig-hover">Контакты</a></li>
        <div class="divider">Соц.сети</div>
        <ul class="flex justify-around">
          <li>
            <a href="https://webk.telegram.org" target="_blank" class="btn btn-ghost btn-navig text-xl">
              <span>Телега</span>
              <img src="./assets/icons/telegram.svg" alt="">
            </a>
          </li>
          <li>
            <a href="https://vk.com/feed" target="_blank" class="btn btn-ghost btn-navig text-xl">
              <span>Вк</span>
              <img src="./assets/icons/vk.svg" alt="">
            </a>
          </li>
        </ul>
      </ul>
    </div>
  </header>

  <!-- Banner -->
  <banner class="flex justify-center bg-neutral py-12 2xl:px-40 xs:px-10 px-5 mb-10">
    <div class="flex lg:flex-row flex-col-reverse items-center justify-center xl:gap-32 lg:gap-20 md:gap-y-14 gap-10">
      <div class="xl:w-1/3 w-full flex flex-col sm:gap-7 gap-3">
        <div class="xs:text-6xl text-4xl uppercase">
          Найди свой <br> <span class="text-accent-content">стиль и</span> <br> самого себя
        </div>
        <div class="divider divider-start divider-base-200 text-accent-content xs:text-2xl text-xl uppercase">
          Эксклюзивный бутик</div>
        <div class="text-sm">
          Мы предлагаем широкий ассортимент модной одежды для <span class="text-accent-content">мужчин и женщин.</span>
          Наш магазин отличается <span class="text-accent-content">высоким качеством товаров и доступными ценами.</span>
        </div>
        <a href="#catalog"
          class="btn bg-accent-content hover:bg-accent border-none text-primary text-2xl font-normal w-fit min-h-6 h-12 px-8 rounded-3xl uppercase">Перейти</a>
      </div>
      <img class="lg:w-1/3 sm:w-2/3 w-full object-contain" src="./assets/images/banner_image1.png" alt="">
    </div>
  </banner>

  <!-- Categories -->
  <categories id="popular" class="block py-12 2xl:px-40 xs:px-10 px-5">
    <div class="text-2xl font-medium mb-10">Популярные категории</div>
    <div class="flex flex-wrap justify-evenly items-center gap-10">
      <a href="#women">
        <div class="relative">
          <img class="brightness-90 w-80" src="./assets/images/women.jpg" alt="">
          <div class="w-full text-center text-2xl text-base-content font-semibold invert absolute bottom-0 py-6">
            Женщинам</div>
        </div>
      </a>
      <a href="#men">
        <div class="relative">
          <img class="brightness-90 w-80" src="./assets/images/men.jpg" alt="">
          <div class="w-full text-center text-2xl text-base-content font-semibold invert absolute bottom-0 py-6">
            Мужчинам</div>
        </div>
      </a>
      <a href="#sale">
        <div class="relative">
          <img class="brightness-90 w-80" src="./assets/images/sale.jpg" alt="">
          <div class="w-full text-center text-2xl text-base-content font-semibold invert absolute bottom-0 py-6">
            Распродажа</div>
        </div>
      </a>
    </div>
  </categories>

  <!-- Items -->
  <items id="catalog">
    <div class="2xl:px-40 xs:px-10 px-5 py-12">
      <div id="women" class="text-2xl font-medium mb-10">Женщинам</div>
      <div class="grid lg:grid-cols-4 xs:grid-cols-2 grid-cols-1 gap-x-6 gap-y-16 justify-items-center">

        <div class="max-w-72 flex flex-col gap-3 text-sm justify-between">
          <div class="w-full relative flex">
            <img class="w-full object-cover aspect-9/12" src="./assets/images/items/image1.jpg" alt="">
            <div class="w-full flex justify-between text-center text-2xl text-primary absolute top-0 p-3">
              <div
                class="h-11 aspect-square grid place-content-center p-1.5 rounded-full bg-secondary text-sm uppercase font-light">
                <span>new</span>
              </div>
              <div
                class="btn btn-circle btn-primary hover:bg-primary h-11 aspect-square grid place-content-center p-2.5 group">
                <svg class="group-hover:fill-secondary" width="22" height="20" viewBox="0 0 87 77" fill="none"
                  xmlns="http://www.w3.org/2000/svg">
                  <path class="group-hover:stroke-secondary"
                    d="M65.8704 3.3C51.5533 3.3 43.5 15.0459 43.5 20.9167C43.5 15.0459 35.4467 3.3 21.1296 3.3C6.8126 3.3 3.23334 15.0459 3.23334 20.9167C3.23334 51.7458 43.5 73.7667 43.5 73.7667C43.5 73.7667 83.7667 51.7458 83.7667 20.9167C83.7667 15.0459 80.1874 3.3 65.8704 3.3Z"
                    stroke="black" stroke-width="5" stroke-linecap="round" stroke-linejoin="round" />
                </svg>
              </div>
            </div>
          </div>
          <div class="uppercase text-ellipsis overflow-hidden">ПАРКА ЗИМНЯЯ ЖЕНСКАЯ «МАРИИНКА» ФУКСИЯ</div>
          <div class="text-xs">Коллекция 2023-2024</div>
          <div class="flex gap-2 text-base">
            <span class="text-secondary">31.000 Тг.</span>
            <span class="line-through">31.000 Тг.</span>
          </div>
          <div class="btn btn-outline btn-neutral w-fit h-fit mt-6 text-sm uppercase">ДОБАВИТЬ В КОРЗИНУ</div>
        </div>

        <div class="max-w-72 flex flex-col gap-3 text-sm justify-between">
          <div class="w-full relative">
            <img class="w-full object-cover aspect-9/12" src="./assets/images/items/image2.jpg" alt="">
            <div class="w-full h-full flex justify-between text-center text-2xl text-primary absolute top-0 p-3">
              <div
                class="h-11 aspect-square grid place-content-center p-1.5 rounded-full bg-secondary text-sm uppercase font-light">
                <span>new</span>
              </div>
              <div
                class="btn btn-circle btn-primary hover:bg-primary h-11 aspect-square grid place-content-center p-2.5 group">
                <svg class="group-hover:fill-secondary" width="22" height="20" viewBox="0 0 87 77" fill="none"
                  xmlns="http://www.w3.org/2000/svg">
                  <path class="group-hover:stroke-secondary"
                    d="M65.8704 3.3C51.5533 3.3 43.5 15.0459 43.5 20.9167C43.5 15.0459 35.4467 3.3 21.1296 3.3C6.8126 3.3 3.23334 15.0459 3.23334 20.9167C3.23334 51.7458 43.5 73.7667 43.5 73.7667C43.5 73.7667 83.7667 51.7458 83.7667 20.9167C83.7667 15.0459 80.1874 3.3 65.8704 3.3Z"
                    stroke="black" stroke-width="5" stroke-linecap="round" stroke-linejoin="round" />
                </svg>
              </div>
            </div>
          </div>
          <div class="uppercase text-ellipsis overflow-hidden">КУРТКА КОРОТКАЯ ЗИМНЯЯ ЖЕНСКАЯ «ФАНТАНКА» СЕРАЯ</div>
          <div class="text-xs">Коллекция 2023-2024</div>
          <div class="flex gap-2 text-base">
            <span class="text-secondary">30.000 Тг.</span>
            <span class="line-through">42.000 Тг.</span>
          </div>
          <div class="btn btn-outline btn-neutral w-fit h-fit mt-6 text-sm uppercase">ДОБАВИТЬ В КОРЗИНУ</div>
        </div>

        <div class="max-w-72 flex flex-col gap-3 text-sm justify-between">
          <div class="w-full relative">
            <img class="w-full object-cover aspect-9/12" src="./assets/images/items/image3.jpg" alt="">
            <div class="w-full h-full flex justify-between text-center text-2xl text-primary absolute top-0 p-3">
              <div
                class="h-11 aspect-square grid place-content-center p-1.5 rounded-full bg-secondary text-sm uppercase font-light">
                <span>new</span>
              </div>
              <div
                class="btn btn-circle btn-primary hover:bg-primary h-11 aspect-square grid place-content-center p-2.5 group">
                <svg class="group-hover:fill-secondary" width="22" height="20" viewBox="0 0 87 77" fill="none"
                  xmlns="http://www.w3.org/2000/svg">
                  <path class="group-hover:stroke-secondary"
                    d="M65.8704 3.3C51.5533 3.3 43.5 15.0459 43.5 20.9167C43.5 15.0459 35.4467 3.3 21.1296 3.3C6.8126 3.3 3.23334 15.0459 3.23334 20.9167C3.23334 51.7458 43.5 73.7667 43.5 73.7667C43.5 73.7667 83.7667 51.7458 83.7667 20.9167C83.7667 15.0459 80.1874 3.3 65.8704 3.3Z"
                    stroke="black" stroke-width="5" stroke-linecap="round" stroke-linejoin="round" />
                </svg>
              </div>
            </div>
          </div>
          <div class="uppercase text-ellipsis overflow-hidden">ПАРКА ЗИМНЯЯ ЖЕНСКАЯ «МАРИИНКА» ПЕРЛАМУТР</div>
          <div class="text-xs">Коллекция 2023-2024</div>
          <div class="flex gap-2 text-base">
            <span class="text-secondary">38.000 Тг.</span>
            <span class="line-through">43.000 Тг.</span>
          </div>
          <div class="btn btn-outline btn-neutral w-fit h-fit mt-6 text-sm uppercase">ДОБАВИТЬ В КОРЗИНУ</div>
        </div>

        <div class="max-w-72 flex flex-col gap-3 text-sm justify-between">
          <div class="w-full relative">
            <img class="w-full object-cover aspect-9/12" src="./assets/images/items/image4.jpg" alt="">
            <div class="w-full h-full flex justify-between text-center text-2xl text-primary absolute top-0 p-3">
              <div
                class="h-11 aspect-square grid place-content-center p-1.5 rounded-full bg-secondary text-sm uppercase font-light">
                <span>-20%</span>
              </div>
              <div
                class="btn btn-circle btn-primary hover:bg-primary h-11 aspect-square grid place-content-center p-2.5 group">
                <svg class="group-hover:fill-secondary" width="22" height="20" viewBox="0 0 87 77" fill="none"
                  xmlns="http://www.w3.org/2000/svg">
                  <path class="group-hover:stroke-secondary"
                    d="M65.8704 3.3C51.5533 3.3 43.5 15.0459 43.5 20.9167C43.5 15.0459 35.4467 3.3 21.1296 3.3C6.8126 3.3 3.23334 15.0459 3.23334 20.9167C3.23334 51.7458 43.5 73.7667 43.5 73.7667C43.5 73.7667 83.7667 51.7458 83.7667 20.9167C83.7667 15.0459 80.1874 3.3 65.8704 3.3Z"
                    stroke="black" stroke-width="5" stroke-linecap="round" stroke-linejoin="round" />
                </svg>
              </div>
            </div>
          </div>
          <div class="uppercase text-ellipsis overflow-hidden">КУРТКА КОРОТКАЯ ЗИМНЯЯ ЖЕНСКАЯ «ФАНТАНКА» БЕЖЕВАЯ</div>
          <div class="text-xs">Коллекция 2023-2024</div>
          <div class="flex gap-2 text-base">
            <span class="text-secondary">38.000 Тг.</span>
            <span class="line-through">48.000 Тг.</span>
          </div>
          <div class="btn btn-outline btn-neutral w-fit h-fit mt-6 text-sm uppercase">ДОБАВИТЬ В КОРЗИНУ</div>
        </div>

      </div>
    </div>
    <div class="2xl:px-40 xs:px-10 px-5 py-12">
      <div id="men" class="text-2xl font-medium mb-10">Мужчинам</div>
      <div class="grid lg:grid-cols-4 xs:grid-cols-2 grid-cols-1 gap-x-6 gap-y-16 justify-items-center">

        <div class="max-w-72 flex flex-col gap-3 text-sm justify-between">
          <div class="w-full relative">
            <img class="w-full object-cover aspect-9/12" src="./assets/images/items/image5.jpg" alt="">
            <div class="w-full h-full flex justify-between text-center text-2xl text-primary absolute top-0 p-3">
              <div
                class="h-11 aspect-square grid place-content-center p-1.5 rounded-full bg-secondary text-sm uppercase font-light">
                <span>new</span>
              </div>
              <div
                class="btn btn-circle btn-primary hover:bg-primary h-11 aspect-square grid place-content-center p-2.5 group">
                <svg class="group-hover:fill-secondary" width="22" height="20" viewBox="0 0 87 77" fill="none"
                  xmlns="http://www.w3.org/2000/svg">
                  <path class="group-hover:stroke-secondary"
                    d="M65.8704 3.3C51.5533 3.3 43.5 15.0459 43.5 20.9167C43.5 15.0459 35.4467 3.3 21.1296 3.3C6.8126 3.3 3.23334 15.0459 3.23334 20.9167C3.23334 51.7458 43.5 73.7667 43.5 73.7667C43.5 73.7667 83.7667 51.7458 83.7667 20.9167C83.7667 15.0459 80.1874 3.3 65.8704 3.3Z"
                    stroke="black" stroke-width="5" stroke-linecap="round" stroke-linejoin="round" />
                </svg>
              </div>
            </div>
          </div>
          <div class="uppercase text-ellipsis overflow-hidden">ПАРКА ЗИМНЯЯ МУЖСКАЯ «АДМИРАЛТЕЙСТВО» ЧЁРНАЯ</div>
          <div class="text-xs">Коллекция 2023-2024</div>
          <div class="flex gap-2 text-base">
            <span class="text-secondary">31.000 Тг.</span>
            <span class="line-through">38.000 Тг.</span>
          </div>
          <div class="btn btn-outline btn-neutral w-fit h-fit mt-6 text-sm uppercase">ДОБАВИТЬ В КОРЗИНУ</div>
        </div>

        <div class="max-w-72 flex flex-col gap-3 text-sm justify-between">
          <div class="w-full relative">
            <img class="w-full object-cover aspect-9/12" src="./assets/images/items/image6.jpg" alt="">
            <div class="w-full h-full flex justify-between text-center text-2xl text-primary absolute top-0 p-3">
              <div
                class="h-11 aspect-square grid place-content-center p-1.5 rounded-full bg-secondary text-sm uppercase font-light">
                <span>-20%</span>
              </div>
              <div
                class="btn btn-circle btn-primary hover:bg-primary h-11 aspect-square grid place-content-center p-2.5 group">
                <svg class="group-hover:fill-secondary" width="22" height="20" viewBox="0 0 87 77" fill="none"
                  xmlns="http://www.w3.org/2000/svg">
                  <path class="group-hover:stroke-secondary"
                    d="M65.8704 3.3C51.5533 3.3 43.5 15.0459 43.5 20.9167C43.5 15.0459 35.4467 3.3 21.1296 3.3C6.8126 3.3 3.23334 15.0459 3.23334 20.9167C3.23334 51.7458 43.5 73.7667 43.5 73.7667C43.5 73.7667 83.7667 51.7458 83.7667 20.9167C83.7667 15.0459 80.1874 3.3 65.8704 3.3Z"
                    stroke="black" stroke-width="5" stroke-linecap="round" stroke-linejoin="round" />
                </svg>
              </div>
            </div>
          </div>
          <div class="uppercase text-ellipsis overflow-hidden">КУРТКА КОРОТКАЯ МУЖСКАЯ «ВЕРФЬ» БЕЖЕВАЯ</div>
          <div class="text-xs">Коллекция 2023-2024</div>
          <div class="flex gap-2 text-base">
            <span class="text-secondary">26.000 Тг.</span>
            <span class="line-through">33.000 Тг.</span>
          </div>
          <div class="btn btn-outline btn-neutral w-fit h-fit mt-6 text-sm uppercase">ДОБАВИТЬ В КОРЗИНУ</div>
        </div>

        <div class="max-w-72 flex flex-col gap-3 text-sm justify-between">
          <div class="w-full relative">
            <img class="w-full object-cover aspect-9/12" src="./assets/images/items/image7.jpg" alt="">
            <div class="w-full h-full flex justify-between text-center text-2xl text-primary absolute top-0 p-3">
              <div
                class="h-11 aspect-square grid place-content-center p-1.5 rounded-full bg-secondary text-sm uppercase font-light">
                <span>new</span>
              </div>
              <div
                class="btn btn-circle btn-primary hover:bg-primary h-11 aspect-square grid place-content-center p-2.5 group">
                <svg class="group-hover:fill-secondary" width="22" height="20" viewBox="0 0 87 77" fill="none"
                  xmlns="http://www.w3.org/2000/svg">
                  <path class="group-hover:stroke-secondary"
                    d="M65.8704 3.3C51.5533 3.3 43.5 15.0459 43.5 20.9167C43.5 15.0459 35.4467 3.3 21.1296 3.3C6.8126 3.3 3.23334 15.0459 3.23334 20.9167C3.23334 51.7458 43.5 73.7667 43.5 73.7667C43.5 73.7667 83.7667 51.7458 83.7667 20.9167C83.7667 15.0459 80.1874 3.3 65.8704 3.3Z"
                    stroke="black" stroke-width="5" stroke-linecap="round" stroke-linejoin="round" />
                </svg>
              </div>
            </div>
          </div>
          <div class="uppercase text-ellipsis overflow-hidden">ВЕТРОВКА МУЖСКАЯ ЧЁРНАЯ "УРАГАН ЗАСТЁЖКА"</div>
          <div class="text-xs">Коллекция 2023-2024</div>
          <div class="flex gap-2 text-base">
            <span class="text-secondary">12.000 Тг.</span>
            <span class="line-through">15.000 Тг.</span>
          </div>
          <div class="btn btn-outline btn-neutral w-fit h-fit mt-6 text-sm uppercase">ДОБАВИТЬ В КОРЗИНУ</div>
        </div>

        <div class="max-w-72 flex flex-col gap-3 text-sm justify-between">
          <div class="w-full relative">
            <img class="w-full object-cover aspect-9/12" src="./assets/images/items/image8.jpg" alt="">
            <div class="w-full h-full flex justify-between text-center text-2xl text-primary absolute top-0 p-3">
              <div
                class="h-11 aspect-square grid place-content-center p-1.5 rounded-full bg-secondary text-sm uppercase font-light">
                <span>-30%</span>
              </div>
              <div
                class="btn btn-circle btn-primary hover:bg-primary h-11 aspect-square grid place-content-center p-2.5 group">
                <svg class="group-hover:fill-secondary" width="22" height="20" viewBox="0 0 87 77" fill="none"
                  xmlns="http://www.w3.org/2000/svg">
                  <path class="group-hover:stroke-secondary"
                    d="M65.8704 3.3C51.5533 3.3 43.5 15.0459 43.5 20.9167C43.5 15.0459 35.4467 3.3 21.1296 3.3C6.8126 3.3 3.23334 15.0459 3.23334 20.9167C3.23334 51.7458 43.5 73.7667 43.5 73.7667C43.5 73.7667 83.7667 51.7458 83.7667 20.9167C83.7667 15.0459 80.1874 3.3 65.8704 3.3Z"
                    stroke="black" stroke-width="5" stroke-linecap="round" stroke-linejoin="round" />
                </svg>
              </div>
            </div>
          </div>
          <div class="uppercase text-ellipsis overflow-hidden">ПЛАЩ МУЖСКОЙ СИНИЙ "BLUE GARMONY"</div>
          <div class="text-xs">Коллекция 2023-2024</div>
          <div class="flex gap-2 text-base">
            <span class="text-secondary">17.000 Тг.</span>
            <span class="line-through">25.000 Тг.</span>
          </div>
          <div class="btn btn-outline btn-neutral w-fit h-fit mt-6 text-sm uppercase">ДОБАВИТЬ В КОРЗИНУ</div>
        </div>
      </div>
    </div>
    <div class="2xl:px-40 xs:px-10 px-5 py-12">
      <div id="sale" class="text-2xl font-medium mb-10">Распродажа</div>
      <div class="grid lg:grid-cols-4 xs:grid-cols-2 grid-cols-1 gap-x-6 gap-y-16 justify-items-center">

        <div class="max-w-72 flex flex-col gap-3 text-sm justify-between">
          <div class="w-full relative">
            <img class="w-full object-cover aspect-9/12" src="./assets/images/items/image9.jpg" alt="">
            <div class="w-full h-full flex justify-between text-center text-2xl text-primary absolute top-0 p-3">
              <div
                class="h-11 aspect-square grid place-content-center p-1.5 rounded-full bg-secondary text-sm uppercase font-light">
                <span>-30%</span>
              </div>
              <div
                class="btn btn-circle btn-primary hover:bg-primary h-11 aspect-square grid place-content-center p-2.5 group">
                <svg class="group-hover:fill-secondary" width="22" height="20" viewBox="0 0 87 77" fill="none"
                  xmlns="http://www.w3.org/2000/svg">
                  <path class="group-hover:stroke-secondary"
                    d="M65.8704 3.3C51.5533 3.3 43.5 15.0459 43.5 20.9167C43.5 15.0459 35.4467 3.3 21.1296 3.3C6.8126 3.3 3.23334 15.0459 3.23334 20.9167C3.23334 51.7458 43.5 73.7667 43.5 73.7667C43.5 73.7667 83.7667 51.7458 83.7667 20.9167C83.7667 15.0459 80.1874 3.3 65.8704 3.3Z"
                    stroke="black" stroke-width="5" stroke-linecap="round" stroke-linejoin="round" />
                </svg>
              </div>
            </div>
          </div>
          <div class="uppercase text-ellipsis overflow-hidden">ПАЛЬТО ТЁПЛОЕ ЖЕНСКОЕ «ЭРМИТАЖ» МЯТНОЕ</div>
          <div class="text-xs">Коллекция 2023-2024</div>
          <div class="flex gap-2 text-base">
            <span class="text-secondary">17.000 Тг.</span>
            <span class="line-through">25.000 Тг.</span>
          </div>
          <div class="btn btn-outline btn-neutral w-fit h-fit mt-6 text-sm uppercase">ДОБАВИТЬ В КОРЗИНУ</div>
        </div>

        <div class="max-w-72 flex flex-col gap-3 text-sm justify-between">
          <div class="w-full relative">
            <img class="w-full object-cover aspect-9/12" src="./assets/images/items/image10.jpg" alt="">
            <div class="w-full h-full flex justify-between text-center text-2xl text-primary absolute top-0 p-3">
              <div
                class="h-11 aspect-square grid place-content-center p-1.5 rounded-full bg-secondary text-sm uppercase font-light">
                <span>-30%</span>
              </div>
              <div
                class="btn btn-circle btn-primary hover:bg-primary h-11 aspect-square grid place-content-center p-2.5 group">
                <svg class="group-hover:fill-secondary" width="22" height="20" viewBox="0 0 87 77" fill="none"
                  xmlns="http://www.w3.org/2000/svg">
                  <path class="group-hover:stroke-secondary"
                    d="M65.8704 3.3C51.5533 3.3 43.5 15.0459 43.5 20.9167C43.5 15.0459 35.4467 3.3 21.1296 3.3C6.8126 3.3 3.23334 15.0459 3.23334 20.9167C3.23334 51.7458 43.5 73.7667 43.5 73.7667C43.5 73.7667 83.7667 51.7458 83.7667 20.9167C83.7667 15.0459 80.1874 3.3 65.8704 3.3Z"
                    stroke="black" stroke-width="5" stroke-linecap="round" stroke-linejoin="round" />
                </svg>
              </div>
            </div>
          </div>
          <div class="uppercase text-ellipsis overflow-hidden">ПАЛЬТО ТЁПЛОЕ ЖЕНСКОЕ «ЭРМИТАЖ» ОРХИДЕЯ</div>
          <div class="text-xs">Коллекция 2023-2024</div>
          <div class="flex gap-2 text-base">
            <span class="text-secondary">14.000 Тг.</span>
            <span class="line-through">20.000 Тг.</span>
          </div>
          <div class="btn btn-outline btn-neutral w-fit h-fit mt-6 text-sm uppercase">ДОБАВИТЬ В КОРЗИНУ</div>
        </div>

        <div class="max-w-72 flex flex-col gap-3 text-sm justify-between">
          <div class="w-full relative">
            <img class="w-full object-cover aspect-9/12" src="./assets/images/items/image11.jpg" alt="">
            <div class="w-full h-full flex justify-between text-center text-2xl text-primary absolute top-0 p-3">
              <div
                class="h-11 aspect-square grid place-content-center p-1.5 rounded-full bg-secondary text-sm uppercase font-light">
                <span>-30%</span>
              </div>
              <div
                class="btn btn-circle btn-primary hover:bg-primary h-11 aspect-square grid place-content-center p-2.5 group">
                <svg class="group-hover:fill-secondary" width="22" height="20" viewBox="0 0 87 77" fill="none"
                  xmlns="http://www.w3.org/2000/svg">
                  <path class="group-hover:stroke-secondary"
                    d="M65.8704 3.3C51.5533 3.3 43.5 15.0459 43.5 20.9167C43.5 15.0459 35.4467 3.3 21.1296 3.3C6.8126 3.3 3.23334 15.0459 3.23334 20.9167C3.23334 51.7458 43.5 73.7667 43.5 73.7667C43.5 73.7667 83.7667 51.7458 83.7667 20.9167C83.7667 15.0459 80.1874 3.3 65.8704 3.3Z"
                    stroke="black" stroke-width="5" stroke-linecap="round" stroke-linejoin="round" />
                </svg>
              </div>
            </div>
          </div>
          <div class="uppercase text-ellipsis overflow-hidden">ПАЛЬТО ТЁПЛОЕ ЖЕНСКОЕ «ЭРМИТАЖ» ЧЁРНОЕ</div>
          <div class="text-xs">Коллекция 2023-2024</div>
          <div class="flex gap-2 text-base">
            <span class="text-secondary">19.600 Тг.</span>
            <span class="line-through">28.000 Тг.</span>
          </div>
          <div class="btn btn-outline btn-neutral w-fit h-fit mt-6 text-sm uppercase">ДОБАВИТЬ В КОРЗИНУ</div>
        </div>

        <div class="max-w-72 flex flex-col gap-3 text-sm justify-between">
          <div class="w-full relative">
            <img class="w-full object-cover aspect-9/12" src="./assets/images/items/image12.jpg" alt="">
            <div class="w-full h-full flex justify-between text-center text-2xl text-primary absolute top-0 p-3">
              <div
                class="h-11 aspect-square grid place-content-center p-1.5 rounded-full bg-secondary text-sm uppercase font-light">
                <span>-30%</span>
              </div>
              <div
                class="btn btn-circle btn-primary hover:bg-primary h-11 aspect-square grid place-content-center p-2.5 group">
                <svg class="group-hover:fill-secondary" width="22" height="20" viewBox="0 0 87 77" fill="none"
                  xmlns="http://www.w3.org/2000/svg">
                  <path class="group-hover:stroke-secondary"
                    d="M65.8704 3.3C51.5533 3.3 43.5 15.0459 43.5 20.9167C43.5 15.0459 35.4467 3.3 21.1296 3.3C6.8126 3.3 3.23334 15.0459 3.23334 20.9167C3.23334 51.7458 43.5 73.7667 43.5 73.7667C43.5 73.7667 83.7667 51.7458 83.7667 20.9167C83.7667 15.0459 80.1874 3.3 65.8704 3.3Z"
                    stroke="black" stroke-width="5" stroke-linecap="round" stroke-linejoin="round" />
                </svg>
              </div>
            </div>
          </div>
          <div class="uppercase text-ellipsis overflow-hidden">ПАЛЬТО ТЁПЛОЕ ЖЕНСКОЕ ПЫЛЬНО-ГОЛУБОЕ</div>
          <div class="text-xs">Коллекция 2023-2024</div>
          <div class="flex gap-2 text-base">
            <span class="text-secondary">15.400 Тг.</span>
            <span class="line-through">22.000 Тг.</span>
          </div>
          <div class="btn btn-outline btn-neutral w-fit h-fit mt-6 text-sm uppercase">ДОБАВИТЬ В КОРЗИНУ</div>
        </div>

      </div>
    </div>
  </items>

  <!-- Hot -->
  <hot class="block py-12 2xl:px-40 xs:px-10 px-5">
    <div class="text-2xl font-medium mb-10">Горящие товары</div>
    <div class="flex gap-6">
      <div class="order-1 xs:inline-flex hidden items-center">
        <button class="btn btn-circle btn-prev p-2">
          <svg class="w-full h-full" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
            <path class="stroke-base-content" d="M6 12H18M6 12L11 7M6 12L11 17" stroke="#000000" stroke-width="2"
              stroke-linecap="round" stroke-linejoin="round" />
          </svg>
        </button>
      </div>
      <div class="order-3 xs:inline-flex hidden items-center">
        <button class="btn btn-circle btn-next p-2">
          <svg class="w-full h-full" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
            <path class="stroke-base-content" d="M6 12H18M18 12L13 7M18 12L13 17" stroke-width="2"
              stroke-linecap="round" stroke-linejoin="round" />
          </svg>
        </button>
      </div>
      <div class="swiper mySwiper order-2">
        <div class="swiper-wrapper mb-20 ">

          <div class="swiper-slide">
            <div class="max-w-72 flex flex-col gap-3 text-sm justify-between">
              <div class="w-full relative">
                <img class="w-full object-cover aspect-9/12" src="./assets/images/items/image13.jpg" alt="">
                <div class="w-full h-full flex justify-between text-center text-2xl text-primary absolute top-0 p-3">
                  <div
                    class="h-11 aspect-square grid place-content-center p-1.5 rounded-full bg-secondary text-sm uppercase font-light">
                    <span>new</span>
                  </div>
                  <div
                    class="btn btn-circle btn-primary hover:bg-primary h-11 aspect-square grid place-content-center p-2.5 group">
                    <svg class="group-hover:fill-secondary" width="22" height="20" viewBox="0 0 87 77" fill="none"
                      xmlns="http://www.w3.org/2000/svg">
                      <path class="group-hover:stroke-secondary"
                        d="M65.8704 3.3C51.5533 3.3 43.5 15.0459 43.5 20.9167C43.5 15.0459 35.4467 3.3 21.1296 3.3C6.8126 3.3 3.23334 15.0459 3.23334 20.9167C3.23334 51.7458 43.5 73.7667 43.5 73.7667C43.5 73.7667 83.7667 51.7458 83.7667 20.9167C83.7667 15.0459 80.1874 3.3 65.8704 3.3Z"
                        stroke="black" stroke-width="5" stroke-linecap="round" stroke-linejoin="round" />
                    </svg>
                  </div>
                </div>
              </div>
              <div class="uppercase text-ellipsis overflow-hidden">ЛОНГСЛИВ ВОЛЧОК «WOLVES DEMONS»</div>
              <div class="text-xs">Коллекция 2023-2024</div>
              <div class="flex gap-2 text-base">
                <span class="text-secondary">28.000 Тг.</span>
                <span class="line-through">42.000 Тг.</span>
              </div>
              <div class="btn btn-outline btn-neutral w-fit h-fit mt-6 text-sm uppercase">ДОБАВИТЬ В КОРЗИНУ</div>
            </div>
          </div>

          <div class="swiper-slide">
            <div class="max-w-72 flex flex-col gap-3 text-sm justify-between">
              <div class="w-full relative">
                <img class="w-full object-cover aspect-9/12" src="./assets/images/items/image14.jpg" alt="">
                <div class="w-full h-full flex justify-between text-center text-2xl text-primary absolute top-0 p-3">
                  <div
                    class="h-11 aspect-square grid place-content-center p-1.5 rounded-full bg-secondary text-sm uppercase font-light">
                    <span>new</span>
                  </div>
                  <div
                    class="btn btn-circle btn-primary hover:bg-primary h-11 aspect-square grid place-content-center p-2.5 group">
                    <svg class="group-hover:fill-secondary" width="22" height="20" viewBox="0 0 87 77" fill="none"
                      xmlns="http://www.w3.org/2000/svg">
                      <path class="group-hover:stroke-secondary"
                        d="M65.8704 3.3C51.5533 3.3 43.5 15.0459 43.5 20.9167C43.5 15.0459 35.4467 3.3 21.1296 3.3C6.8126 3.3 3.23334 15.0459 3.23334 20.9167C3.23334 51.7458 43.5 73.7667 43.5 73.7667C43.5 73.7667 83.7667 51.7458 83.7667 20.9167C83.7667 15.0459 80.1874 3.3 65.8704 3.3Z"
                        stroke="black" stroke-width="5" stroke-linecap="round" stroke-linejoin="round" />
                    </svg>
                  </div>
                </div>
              </div>
              <div class="uppercase text-ellipsis overflow-hidden">ДЖИНСОВЫЙ СЕТ «JEANS CHANNING»</div>
              <div class="text-xs">Коллекция 2023-2024</div>
              <div class="flex gap-2 text-base">
                <span class="text-secondary">50.000 Тг.</span>
                <span class="line-through">66.000 Тг.</span>
              </div>
              <div class="btn btn-outline btn-neutral w-fit h-fit mt-6 text-sm uppercase">ДОБАВИТЬ В КОРЗИНУ</div>
            </div>
          </div>

          <div class="swiper-slide">
            <div class="max-w-72 flex flex-col gap-3 text-sm justify-between">
              <div class="w-full relative">
                <img class="w-full object-cover aspect-9/12" src="./assets/images/items/image15.jpg" alt="">
                <div class="w-full h-full flex justify-between text-center text-2xl text-primary absolute top-0 p-3">
                  <div
                    class="h-11 aspect-square grid place-content-center p-1.5 rounded-full bg-secondary text-sm uppercase font-light">
                    <span>new</span>
                  </div>
                  <div
                    class="btn btn-circle btn-primary hover:bg-primary h-11 aspect-square grid place-content-center p-2.5 group">
                    <svg class="group-hover:fill-secondary" width="22" height="20" viewBox="0 0 87 77" fill="none"
                      xmlns="http://www.w3.org/2000/svg">
                      <path class="group-hover:stroke-secondary"
                        d="M65.8704 3.3C51.5533 3.3 43.5 15.0459 43.5 20.9167C43.5 15.0459 35.4467 3.3 21.1296 3.3C6.8126 3.3 3.23334 15.0459 3.23334 20.9167C3.23334 51.7458 43.5 73.7667 43.5 73.7667C43.5 73.7667 83.7667 51.7458 83.7667 20.9167C83.7667 15.0459 80.1874 3.3 65.8704 3.3Z"
                        stroke="black" stroke-width="5" stroke-linecap="round" stroke-linejoin="round" />
                    </svg>
                  </div>
                </div>
              </div>
              <div class="uppercase text-ellipsis overflow-hidden">БОМБЕР «ЭКО ЧУДО ОГОНЁК» БОРДОВЫЙ</div>
              <div class="text-xs">Коллекция 2023-2024</div>
              <div class="flex gap-2 text-base">
                <span class="text-secondary">44.000 Тг.</span>
                <span class="line-through">55.000 Тг.</span>
              </div>
              <div class="btn btn-outline btn-neutral w-fit h-fit mt-6 text-sm uppercase">ДОБАВИТЬ В КОРЗИНУ</div>
            </div>
          </div>

          <div class="swiper-slide">
            <div class="max-w-72 flex flex-col gap-3 text-sm justify-between">
              <div class="w-full relative">
                <img class="w-full object-cover aspect-9/12" src="./assets/images/items/image16.jpg" alt="">
                <div class="w-full h-full flex justify-between text-center text-2xl text-primary absolute top-0 p-3">
                  <div
                    class="h-11 aspect-square grid place-content-center p-1.5 rounded-full bg-secondary text-sm uppercase font-light">
                    <span>new</span>
                  </div>
                  <div
                    class="btn btn-circle btn-primary hover:bg-primary h-11 aspect-square grid place-content-center p-2.5 group">
                    <svg class="group-hover:fill-secondary" width="22" height="20" viewBox="0 0 87 77" fill="none"
                      xmlns="http://www.w3.org/2000/svg">
                      <path class="group-hover:stroke-secondary"
                        d="M65.8704 3.3C51.5533 3.3 43.5 15.0459 43.5 20.9167C43.5 15.0459 35.4467 3.3 21.1296 3.3C6.8126 3.3 3.23334 15.0459 3.23334 20.9167C3.23334 51.7458 43.5 73.7667 43.5 73.7667C43.5 73.7667 83.7667 51.7458 83.7667 20.9167C83.7667 15.0459 80.1874 3.3 65.8704 3.3Z"
                        stroke="black" stroke-width="5" stroke-linecap="round" stroke-linejoin="round" />
                    </svg>
                  </div>
                </div>
              </div>
              <div class="uppercase text-ellipsis overflow-hidden">ВЕТРОВКА «ANTEATER WINDJACKET-96»</div>
              <div class="text-xs">Коллекция 2023-2024</div>
              <div class="flex gap-2 text-base">
                <span class="text-secondary">32.000 Тг.</span>
                <span class="line-through">42.000 Тг.</span>
              </div>
              <div class="btn btn-outline btn-neutral w-fit h-fit mt-6 text-sm uppercase">ДОБАВИТЬ В КОРЗИНУ</div>
            </div>
          </div>

          <div class="swiper-slide">
            <div class="max-w-72 flex flex-col gap-3 text-sm justify-between">
              <div class="w-full relative">
                <img class="w-full object-cover aspect-9/12" src="./assets/images/items/image17.jpg" alt="">
                <div class="w-full h-full flex justify-between text-center text-2xl text-primary absolute top-0 p-3">
                  <div
                    class="h-11 aspect-square grid place-content-center p-1.5 rounded-full bg-secondary text-sm uppercase font-light">
                    <span>new</span>
                  </div>
                  <div
                    class="btn btn-circle btn-primary hover:bg-primary h-11 aspect-square grid place-content-center p-2.5 group">
                    <svg class="group-hover:fill-secondary" width="22" height="20" viewBox="0 0 87 77" fill="none"
                      xmlns="http://www.w3.org/2000/svg">
                      <path class="group-hover:stroke-secondary"
                        d="M65.8704 3.3C51.5533 3.3 43.5 15.0459 43.5 20.9167C43.5 15.0459 35.4467 3.3 21.1296 3.3C6.8126 3.3 3.23334 15.0459 3.23334 20.9167C3.23334 51.7458 43.5 73.7667 43.5 73.7667C43.5 73.7667 83.7667 51.7458 83.7667 20.9167C83.7667 15.0459 80.1874 3.3 65.8704 3.3Z"
                        stroke="black" stroke-width="5" stroke-linecap="round" stroke-linejoin="round" />
                    </svg>
                  </div>
                </div>
              </div>
              <div class="uppercase text-ellipsis overflow-hidden">КУРТКА «ANTEATER WGARAGE-BAGE»</div>
              <div class="text-xs">Коллекция 2023-2024</div>
              <div class="flex gap-2 text-base">
                <span class="text-secondary">43.000 Тг.</span>
                <span class="line-through">48.000 Тг.</span>
              </div>
              <div class="btn btn-outline btn-neutral w-fit h-fit mt-6 text-sm uppercase">ДОБАВИТЬ В КОРЗИНУ</div>
            </div>
          </div>

          <div class="swiper-slide">
            <div class="max-w-72 flex flex-col gap-3 text-sm justify-between">
              <div class="w-full relative">
                <img class="w-full object-cover aspect-9/12" src="./assets/images/items/image18.jpg" alt="">
                <div class="w-full h-full flex justify-between text-center text-2xl text-primary absolute top-0 p-3">
                  <div
                    class="h-11 aspect-square grid place-content-center p-1.5 rounded-full bg-secondary text-sm uppercase font-light">
                    <span>new</span>
                  </div>
                  <div
                    class="btn btn-circle btn-primary hover:bg-primary h-11 aspect-square grid place-content-center p-2.5 group">
                    <svg class="group-hover:fill-secondary" width="22" height="20" viewBox="0 0 87 77" fill="none"
                      xmlns="http://www.w3.org/2000/svg">
                      <path class="group-hover:stroke-secondary"
                        d="M65.8704 3.3C51.5533 3.3 43.5 15.0459 43.5 20.9167C43.5 15.0459 35.4467 3.3 21.1296 3.3C6.8126 3.3 3.23334 15.0459 3.23334 20.9167C3.23334 51.7458 43.5 73.7667 43.5 73.7667C43.5 73.7667 83.7667 51.7458 83.7667 20.9167C83.7667 15.0459 80.1874 3.3 65.8704 3.3Z"
                        stroke="black" stroke-width="5" stroke-linecap="round" stroke-linejoin="round" />
                    </svg>
                  </div>
                </div>
              </div>
              <div class="uppercase text-ellipsis overflow-hidden">ХУДИ ANTEATER «HOODIE-BLACK-ANTEATER»</div>
              <div class="text-xs">Коллекция 2023-2024</div>
              <div class="flex gap-2 text-base">
                <span class="text-secondary">24.000 Тг.</span>
                <span class="line-through">31.000 Тг.</span>
              </div>
              <div class="btn btn-outline btn-neutral w-fit h-fit mt-6 text-sm uppercase">ДОБАВИТЬ В КОРЗИНУ</div>
            </div>
          </div>

          <div class="swiper-slide">
            <div class="max-w-72 flex flex-col gap-3 text-sm justify-between">
              <div class="w-full relative">
                <img class="w-full object-cover aspect-9/12" src="./assets/images/items/image19.jpg" alt="">
                <div class="w-full h-full flex justify-between text-center text-2xl text-primary absolute top-0 p-3">
                  <div
                    class="h-11 aspect-square grid place-content-center p-1.5 rounded-full bg-secondary text-sm uppercase font-light">
                    <span>new</span>
                  </div>
                  <div
                    class="btn btn-circle btn-primary hover:bg-primary h-11 aspect-square grid place-content-center p-2.5 group">
                    <svg class="group-hover:fill-secondary" width="22" height="20" viewBox="0 0 87 77" fill="none"
                      xmlns="http://www.w3.org/2000/svg">
                      <path class="group-hover:stroke-secondary"
                        d="M65.8704 3.3C51.5533 3.3 43.5 15.0459 43.5 20.9167C43.5 15.0459 35.4467 3.3 21.1296 3.3C6.8126 3.3 3.23334 15.0459 3.23334 20.9167C3.23334 51.7458 43.5 73.7667 43.5 73.7667C43.5 73.7667 83.7667 51.7458 83.7667 20.9167C83.7667 15.0459 80.1874 3.3 65.8704 3.3Z"
                        stroke="black" stroke-width="5" stroke-linecap="round" stroke-linejoin="round" />
                    </svg>
                  </div>
                </div>
              </div>
              <div class="uppercase text-ellipsis overflow-hidden">БОМБЕР «ЭКО ЧУДО ОГОНЁК» ГОЛУБОЙ</div>
              <div class="text-xs">Коллекция 2023-2024</div>
              <div class="flex gap-2 text-base">
                <span class="text-secondary">38.000 Тг.</span>
                <span class="line-through">55.000 Тг.</span>
              </div>
              <div class="btn btn-outline btn-neutral w-fit h-fit mt-6 text-sm uppercase">ДОБАВИТЬ В КОРЗИНУ</div>
            </div>
          </div>

          <div class="swiper-slide">
            <div class="max-w-72 flex flex-col gap-3 text-sm justify-between">
              <div class="w-full relative">
                <img class="w-full object-cover aspect-9/12" src="./assets/images/items/image20.jpg" alt="">
                <div class="w-full h-full flex justify-between text-center text-2xl text-primary absolute top-0 p-3">
                  <div
                    class="h-11 aspect-square grid place-content-center p-1.5 rounded-full bg-secondary text-sm uppercase font-light">
                    <span>new</span>
                  </div>
                  <div
                    class="btn btn-circle btn-primary hover:bg-primary h-11 aspect-square grid place-content-center p-2.5 group">
                    <svg class="group-hover:fill-secondary" width="22" height="20" viewBox="0 0 87 77" fill="none"
                      xmlns="http://www.w3.org/2000/svg">
                      <path class="group-hover:stroke-secondary"
                        d="M65.8704 3.3C51.5533 3.3 43.5 15.0459 43.5 20.9167C43.5 15.0459 35.4467 3.3 21.1296 3.3C6.8126 3.3 3.23334 15.0459 3.23334 20.9167C3.23334 51.7458 43.5 73.7667 43.5 73.7667C43.5 73.7667 83.7667 51.7458 83.7667 20.9167C83.7667 15.0459 80.1874 3.3 65.8704 3.3Z"
                        stroke="black" stroke-width="5" stroke-linecap="round" stroke-linejoin="round" />
                    </svg>
                  </div>
                </div>
              </div>
              <div class="uppercase text-ellipsis overflow-hidden">ПЛАЩ «ЭКО ЧУДО ОГОНЁК» ЗЕЛЁНЫЙ</div>
              <div class="text-xs">Коллекция 2023-2024</div>
              <div class="flex gap-2 text-base">
                <span class="text-secondary">23.000 Тг.</span>
                <span class="line-through">33.000 Тг.</span>
              </div>
              <div class="btn btn-outline btn-neutral w-fit h-fit mt-6 text-sm uppercase">ДОБАВИТЬ В КОРЗИНУ</div>
            </div>
          </div>

          <div class="swiper-slide">
            <div class="max-w-72 flex flex-col gap-3 text-sm justify-between">
              <div class="w-full relative">
                <img class="w-full object-cover aspect-9/12" src="./assets/images/items/image21.jpg" alt="">
                <div class="w-full h-full flex justify-between text-center text-2xl text-primary absolute top-0 p-3">
                  <div
                    class="h-11 aspect-square grid place-content-center p-1.5 rounded-full bg-secondary text-sm uppercase font-light">
                    <span>new</span>
                  </div>
                  <div
                    class="btn btn-circle btn-primary hover:bg-primary h-11 aspect-square grid place-content-center p-2.5 group">
                    <svg class="group-hover:fill-secondary" width="22" height="20" viewBox="0 0 87 77" fill="none"
                      xmlns="http://www.w3.org/2000/svg">
                      <path class="group-hover:stroke-secondary"
                        d="M65.8704 3.3C51.5533 3.3 43.5 15.0459 43.5 20.9167C43.5 15.0459 35.4467 3.3 21.1296 3.3C6.8126 3.3 3.23334 15.0459 3.23334 20.9167C3.23334 51.7458 43.5 73.7667 43.5 73.7667C43.5 73.7667 83.7667 51.7458 83.7667 20.9167C83.7667 15.0459 80.1874 3.3 65.8704 3.3Z"
                        stroke="black" stroke-width="5" stroke-linecap="round" stroke-linejoin="round" />
                    </svg>
                  </div>
                </div>
              </div>
              <div class="uppercase text-ellipsis overflow-hidden">ЮБКА «ЧУДНОЕ БЕЛОЕ ДЕЛО»</div>
              <div class="text-xs">Коллекция 2023-2024</div>
              <div class="flex gap-2 text-base">
                <span class="text-secondary">21.000 Тг.</span>
                <span class="line-through">30.000 Тг.</span>
              </div>
              <div class="btn btn-outline btn-neutral w-fit h-fit mt-6 text-sm uppercase">ДОБАВИТЬ В КОРЗИНУ</div>
            </div>
          </div>

        </div>
        <div class="swiper-pagination"></div>
      </div>
    </div>
  </hot>

  <!-- AboutUs -->
  <about id="about" class="block py-12 2xl:px-40 xs:px-10 px-5">
    <div class="text-2xl font-medium mb-10">О нас</div>
    <div class="flex lg:flex-row flex-col items-center justify-center sm:gap-32 xs:gap-20 gap-12 text-center">
      <img class="lg:w-1/3 sm:w-2/3 w-full object-contain" src="./assets/images/about-image.jpg" alt="">
      <div class="flex flex-col sm:gap-7 xs:gap-6 gap-4">
        <div class="sm:text-5xl xs:text-4xl text-3xl uppercase font-martel mb-2">Fashion | Dstyle</div>
        <div class="sm:text-base xs:text-sm text-xs">Наши наряды – это стильные и по-настоящему <br> функциональные вещи
          из лучших материалов.</div>
        <div class="w-2/3 m-auto divider divider-base-100"></div>
        <div class="sm:text-base xs:text-sm text-xs">
          Являясь прямым производителем, мы <br> придерживаемся доступных цен при неизменном <br> качестве. Работая над
          лекалами,
          выбирая ткани и <br> фурнитуру, мы думаем о свободе движений, о <br> тактильности и особенном самоощущении,
          которое <br>
          должна дарить наша одежда.
        </div>
        <div class="w-2/3 m-auto divider divider-base-100"></div>
        <div class="sm:text-base xs:text-sm text-xs">Наши наряды – это стильные и по-настоящему <br> функциональные вещи
          из лучших материалов.</div>
        <div class="text-sm"></div>
      </div>
    </div>
  </about>

  <!-- Info -->
  <info id="info" class="block py-12 2xl:px-40 xs:px-10 px-5">
    <div class="text-2xl font-medium mb-10">Удобство для вас</div>
    <div class="grid grid-cols-2 sm:gap-x-20 xs:gap-x-8 gap-x-6 gap-y-10 m-auto justify-items-center w-fit">
      <div class="w-full flex md:flex-row flex-col md:text-left text-center xs:text-base text-xs items-center gap-6">
        <svg class="max-w-20" viewBox="0 0 84 84" fill="none" xmlns="http://www.w3.org/2000/svg">
          <circle class="fill-accent" cx="42" cy="42" r="42" />
          <path
            d="M22.1887 25.8491L41.1887 15.8491L60.1887 25.8491V47.8491C60.1887 54.8491 47.522 64.5158 41.1887 67.8491C35.1887 64.8491 22.1887 54.8491 22.1887 47.8491V25.8491Z"
            stroke="white" stroke-width="4" />
          <path d="M34.1887 41.8489L39.1887 46.8489L50.1887 37.8489" stroke="white" stroke-width="4" />
        </svg>
        <div>
          <div class="font-semibold mb-2">Гарантия возврата</div>
          <div class="max-w-96">
            Если нужно обменять или вернуть товар по
            заказу. Сообщите нам со страницы контактов
          </div>
        </div>
      </div>
      <div class="w-full flex md:flex-row flex-col md:text-left text-center xs:text-base text-xs items-center gap-6">
        <svg class="max-w-20" viewBox="0 0 84 84" fill="none" xmlns="http://www.w3.org/2000/svg">
          <circle class="fill-accent" cx="42" cy="42" r="42" />
          <path
            d="M37.0714 60.8929L55.9643 47.75V30.5M37.0714 60.8929L19 50.2143V30.5M37.0714 60.8929V41.1786M55.9643 30.5L37.0714 19L28.0357 24.75M55.9643 30.5L45.2857 36.25M19 30.5L37.0714 41.1786M19 30.5L28.0357 24.75M37.0714 41.1786L45.2857 36.25M28.0357 24.75L45.2857 36.25"
            stroke="white" stroke-width="3" />
          <circle cx="52.6786" cy="52.6786" r="10.8214" stroke="white" stroke-width="3" />
          <path d="M47.0779 53.7984L52.6785 58.2789L59.3993 49.3179" stroke="white" stroke-width="3" />
        </svg>
        <div>
          <div class="font-semibold mb-2">Доставка по всему Казахстану</div>
          <div class="max-w-96">
            Из Астаны в Алмату менее чем за сутки.
            Доставка по Алмате от 25 минут,
          </div>
        </div>
      </div>
      <div class="w-full flex md:flex-row flex-col md:text-left text-center xs:text-base text-xs items-center gap-6">
        <svg class="max-w-20" viewBox="0 0 84 84" fill="none" xmlns="http://www.w3.org/2000/svg">
          <circle class="fill-accent" cx="42" cy="42" r="42" />
          <rect x="22.5" y="22.5" width="30.6" height="30.6" stroke="white" stroke-width="3" />
          <rect x="30.9" y="30.8999" width="30.6" height="30.6" stroke="white" stroke-width="3" />
        </svg>
        <div>
          <div class="font-semibold mb-2">Качественные материалы</div>
          <div class="max-w-96">
            Используем инновационные ткани, проверенную
            фурнитуру и премиальный утеплитель.

          </div>
        </div>
      </div>
      <div class="w-full flex md:flex-row flex-col md:text-left text-center xs:text-base text-xs items-center gap-6">
        <svg class="max-w-20" viewBox="0 0 84 84" fill="none" xmlns="http://www.w3.org/2000/svg">
          <circle class="fill-accent" cx="42" cy="42" r="42" />
          <path
            d="M40.9993 21.8823C44.2522 21.8823 46.7155 21.2234 47.9281 20.8148C47.1693 24.6431 44.1953 27.3298 40.9993 27.3298C37.8166 27.3298 34.8407 24.6399 34.0733 20.818C34.4306 20.9383 34.8984 21.0807 35.4645 21.2216C36.8043 21.5551 38.7045 21.8823 40.9993 21.8823Z"
            stroke="white" stroke-width="3" />
          <path
            d="M28.3819 60.8516C28.576 60.9524 28.7871 61.0031 29.0002 61H52.9998C53.2129 61.0031 53.424 60.9524 53.6181 60.8516M28.3819 60.8516L28.9823 59.7568L29.0002 59.7242L29.066 59.6041L29.1031 59.5364C29.1237 59.5477 29.1356 59.558 29.1416 59.5641C29.1483 59.5709 29.1474 59.5722 29.1428 59.5634C29.1362 59.5511 29.1283 59.5291 29.1247 59.5M28.3819 60.8516C28.1482 60.7235 27.9521 60.52 27.8175 60.266C27.6828 60.012 27.6154 59.7185 27.6235 59.4212L28.2344 36.3564C28.2394 36.1642 28.1813 35.9769 28.0717 35.8316M28.3819 60.8516L28.9814 59.6966L29.0002 59.6605L29.0155 59.6309L29.0729 59.5203C29.0568 59.5119 29.0317 59.5034 29.0002 59.5009C28.9933 59.5003 28.9861 59.5001 28.9786 59.5002L28.9894 59.5H29.0002H29.1247M29.1247 59.5H52.8753M29.1247 59.5C29.1233 59.4884 29.1226 59.4757 29.123 59.4621L29.123 59.4609L29.7338 36.3961L29.7338 36.3956C29.7472 35.8846 29.5953 35.3604 29.2691 34.9282L28.0717 35.8316M52.8753 59.5C52.8717 59.5291 52.8638 59.5511 52.8572 59.5634C52.8558 59.5662 52.8547 59.568 52.8541 59.5689C52.8548 59.568 52.8562 59.5663 52.8584 59.5641C52.8644 59.558 52.8763 59.5477 52.8969 59.5364L52.934 59.6041L52.9998 59.7242L53.0177 59.7568L53.6181 60.8516M52.8753 59.5H52.9998H53.0106L53.0214 59.5002C53.0139 59.5001 53.0067 59.5003 52.9998 59.5009C52.9683 59.5034 52.9432 59.5119 52.9271 59.5203L52.9845 59.6309L52.9998 59.6605L53.0186 59.6966L53.6181 60.8516M52.8753 59.5C52.8767 59.4884 52.8774 59.4757 52.877 59.4621L52.877 59.4609L52.2662 36.3961L52.2662 36.3956C52.2528 35.8846 52.4047 35.3604 52.7309 34.9282L52.7309 34.9282C53.0603 34.4916 53.5621 34.1628 54.1643 34.0847L54.3573 35.5722M53.6181 60.8516C53.8518 60.7235 54.0479 60.52 54.1825 60.266C54.3172 60.012 54.3846 59.7185 54.3765 59.4212L53.7656 36.3564C53.7606 36.1642 53.8187 35.9769 53.9283 35.8316C54.0379 35.6864 54.191 35.5938 54.3573 35.5722M54.3573 35.5722L54.1646 34.0847M54.3573 35.5722L58.4306 35.0437M54.1646 34.0847L60.8219 24.3311C60.9814 24.6492 61.0363 25.0225 60.9764 25.3831L59.5906 33.8086M54.1646 34.0847L58.1089 33.5729M54.1646 34.0847L58.2415 33.5867M58.4306 35.0437C58.7133 35.007 58.9784 34.8673 59.1872 34.6451C59.3959 34.4229 59.5372 34.1297 59.5906 33.8086M58.4306 35.0437L58.2667 33.7806L58.2415 33.5867M58.4306 35.0437L58.2666 33.7805L58.2414 33.5867L58.1653 33.5742C58.1246 33.5899 58.1014 33.6101 58.0938 33.6182C58.0887 33.6236 58.091 33.6227 58.096 33.6124C58.1002 33.6037 58.1052 33.5904 58.1089 33.5729M59.5906 33.8086L58.2412 33.5845L58.2376 33.5562L58.2375 33.5562L58.2411 33.5845L58.1695 33.5726C58.1884 33.5656 58.2108 33.5597 58.2369 33.5563L58.1438 33.5683L58.1108 33.5629M59.5906 33.8086L58.2415 33.5867M58.2415 33.5867L58.1108 33.5629M58.1089 33.5729L58.136 33.5694L58.1104 33.5652L58.1107 33.5638C58.1101 33.5669 58.1096 33.57 58.1089 33.5729ZM58.1108 33.5629L59.4963 25.1396L59.4966 25.1374C59.5046 25.0894 59.4974 25.0457 59.487 25.0175M58.1108 33.5629L49.2118 19.6196M59.487 25.0175L59.5473 25.0417C59.5118 25.0274 59.4922 25.0117 59.483 25.0027C59.4783 24.9981 59.4763 24.9953 59.4763 24.9952C59.4763 24.9951 59.4781 24.9976 59.4811 25.0036C59.4831 25.0077 59.4851 25.0123 59.487 25.0175ZM59.487 25.0175L50.0876 21.2369M50.0876 21.2369C50.2121 20.7787 50.3094 20.3103 50.3785 19.8349L50.3785 19.8349L50.3804 19.8211C50.3798 19.8257 50.3791 19.8303 50.3784 19.8349C50.3592 19.9641 50.3151 20.0966 50.241 20.2229L49.3157 19.6805L49.3068 19.6753L49.2555 19.6452L49.2252 19.6013M50.0876 21.2369C49.5716 23.1366 48.5892 24.8623 47.2196 26.195C45.5148 27.854 43.3145 28.7975 41.0033 28.7975C38.6922 28.7975 36.4919 27.854 34.7871 26.195C33.4169 24.8618 32.4342 23.1352 31.9184 21.2345M50.0876 21.2369L48.775 20.709M49.2252 19.6013L49.2214 19.5957L49.2252 19.6013ZM49.2252 19.6013L49.2555 19.6452L49.2285 19.6294L49.2555 19.6453L49.273 19.6707L49.2555 19.6453L49.3068 19.6753L49.3156 19.6805L50.241 20.223C50.1641 20.3541 50.0527 20.4819 49.903 20.5851L49.2758 19.6747L49.903 20.5851C49.7521 20.6891 49.5686 20.763 49.3649 20.787C49.1607 20.8111 48.9577 20.7822 48.775 20.709M48.775 20.709L49.1944 19.6629L49.1955 19.6602L49.2118 19.6196M48.775 20.709L31.9184 21.2345M49.2118 19.6196V19.6196ZM49.2115 19.6194V19.6194ZM49.2115 19.6194L49.2211 19.5954L49.2237 19.5889L49.2115 19.6194ZM31.9184 21.2345L33.2265 20.7084L33.2413 20.7024L33.2559 20.6962C33.2462 20.7003 33.2364 20.7044 33.2265 20.7083C33.0512 20.7777 32.8568 20.8066 32.6598 20.7864C32.4522 20.7652 32.2646 20.6919 32.1101 20.5871C31.9569 20.4832 31.8433 20.3533 31.7653 20.2202M31.9184 21.2345L31.7653 20.2202L31.7653 20.2202M31.9184 21.2345L22.513 25.0175M31.9184 21.2345L21.8959 23.658L21.8928 23.6501C21.5912 23.7714 21.3376 24.0131 21.1781 24.3311C21.0186 24.6492 20.9637 25.0225 21.0236 25.3831L22.4094 33.8086M31.9184 21.2345C31.7942 20.777 31.6971 20.3095 31.6282 19.8349L31.6265 19.8235L31.6251 19.8121C31.626 19.8197 31.6271 19.8273 31.6283 19.8349C31.6478 19.9633 31.6918 20.0948 31.7653 20.2202M31.9184 21.2345L31.7653 20.2202M22.513 25.0175C22.5149 25.0123 22.5169 25.0077 22.5189 25.0036L22.517 25.0027M22.513 25.0175L22.4525 25.0418C22.4881 25.0274 22.5078 25.0117 22.517 25.0027M22.513 25.0175C22.5026 25.0457 22.4954 25.0894 22.5034 25.1374L22.5037 25.1396L23.8892 33.5629L23.8562 33.5683L23.763 33.5562C23.7892 33.5597 23.8116 33.5656 23.8305 33.5726L23.7589 33.5845L23.7625 33.5562L23.7624 33.5562L23.7588 33.5845L22.4094 33.8086M22.517 25.0027L22.5189 25.0036C22.5219 24.9977 22.5237 24.9952 22.5237 24.9952C22.5237 24.9952 22.5217 24.9981 22.517 25.0027ZM22.4094 33.8086L23.7585 33.5867L23.7333 33.7806L23.5694 35.0437M22.4094 33.8086C22.4628 34.1297 22.6041 34.4229 22.8128 34.6451C23.0216 34.8673 23.2867 35.007 23.5694 35.0437M23.5694 35.0437L27.6427 35.5722M23.5694 35.0437L23.7334 33.7805M27.6427 35.5722C27.809 35.5938 27.9621 35.6864 28.0717 35.8316M27.6427 35.5722L27.8357 34.0847C28.4379 34.1628 28.9397 34.4916 29.2691 34.9282L28.0717 35.8316M27.6427 35.5722L27.8354 34.0847L23.8911 33.5729M23.8911 33.5729C23.8904 33.5699 23.8898 33.5668 23.8893 33.5635L23.8896 33.5652L23.864 33.5694L23.8911 33.5729ZM23.8911 33.5729C23.8948 33.5904 23.8998 33.6037 23.904 33.6124C23.907 33.6187 23.9091 33.6215 23.9091 33.6215C23.9091 33.6215 23.9082 33.6203 23.9062 33.6182L23.7334 33.7805M23.7334 33.7805L23.9062 33.6182C23.8986 33.6101 23.8754 33.5899 23.8347 33.5742L23.7586 33.5867L23.7334 33.7805Z"
            stroke="white" stroke-width="3" />
          <path
            d="M63.3536 69.3536C63.5488 69.1583 63.5488 68.8417 63.3536 68.6464L60.1716 65.4645C59.9763 65.2692 59.6597 65.2692 59.4645 65.4645C59.2692 65.6597 59.2692 65.9763 59.4645 66.1716L62.2929 69L59.4645 71.8284C59.2692 72.0237 59.2692 72.3403 59.4645 72.5355C59.6597 72.7308 59.9763 72.7308 60.1716 72.5355L63.3536 69.3536ZM41 69.5H63V68.5H41V69.5Z"
            fill="white" />
          <path
            d="M18.6464 68.6464C18.4512 68.8417 18.4512 69.1583 18.6464 69.3536L21.8284 72.5355C22.0237 72.7308 22.3403 72.7308 22.5355 72.5355C22.7308 72.3403 22.7308 72.0237 22.5355 71.8284L19.7071 69L22.5355 66.1716C22.7308 65.9763 22.7308 65.6597 22.5355 65.4645C22.3403 65.2692 22.0237 65.2692 21.8284 65.4645L18.6464 68.6464ZM41 68.5L19 68.5L19 69.5L41 69.5L41 68.5Z"
            fill="white" />
        </svg>
        <div>
          <div class="font-semibold mb-2">Точное соответствие с размерами</div>
          <div class="max-w-96">
            У нас есть модели на все типы фигур.
          </div>
        </div>
      </div>
    </div>
  </info>

  <!-- Footer -->
  <footer id="contacts">
    <div
      class="flex justify-between xs:flex-row flex-col gap-y-4 py-6 2xl:px-40 xs:px-10 px-5 border-y-2 bg-base-100 text-base-content border-base-300">
      <a href="#header" class="w-full flex xs:justify-start justify-center">
        <svg class="fill-accent max-w-64" viewBox="0 0 325 100" xmlns="http://www.w3.org/2000/svg">
          <path
            d="M1.03073 23.807L43.0307 0.537022C43.6337 0.202933 44.3663 0.202933 44.9693 0.537022L86.9693 23.807C87.6053 24.1594 88 24.8293 88 25.5565V72.9852C88 73.6941 87.6248 74.35 87.0137 74.7093L45.0137 99.404C44.388 99.7719 43.612 99.7719 42.9863 99.404L0.986301 74.7093C0.37523 74.35 0 73.6941 0 72.9852V25.5565C0 24.8293 0.394672 24.1594 1.03073 23.807Z" />
          <path class="fill-base-content"
            d="M99.456 43.92V27.888L97.392 27.696V26.808H109.8L110.064 30.144L109.152 30.168L108.6 27.936L101.184 27.792V35.232L106.608 35.136L106.992 33.312H107.904V38.232H106.896L106.608 36.288L101.184 36.192V43.944L104.808 44.136V45H97.224V44.208L99.456 43.92ZM112.212 43.944L118.524 26.712H119.94L126.06 43.944L128.004 44.208V45H122.292V44.208L124.26 43.944L122.772 39.672H115.212L113.748 43.944L115.788 44.208V45H110.508V44.208L112.212 43.944ZM119.892 31.416L119.028 28.68L115.572 38.592H122.412L119.892 31.416ZM135.121 45.264C134.049 45.264 132.985 45.152 131.929 44.928C130.873 44.704 130.153 44.48 129.769 44.256V40.752H130.633L131.185 43.152C131.617 43.584 132.209 43.888 132.961 44.064C133.729 44.24 134.521 44.328 135.337 44.328C136.489 44.328 137.473 44.048 138.289 43.488C139.121 42.912 139.537 42.032 139.537 40.848C139.537 40.176 139.329 39.584 138.913 39.072C138.513 38.544 138.001 38.088 137.377 37.704C136.753 37.32 135.945 36.888 134.953 36.408C133.897 35.896 133.017 35.424 132.313 34.992C131.625 34.544 131.049 34.008 130.585 33.384C130.121 32.76 129.889 32.032 129.889 31.2C129.889 30.176 130.177 29.32 130.753 28.632C131.345 27.944 132.073 27.44 132.937 27.12C133.817 26.8 134.697 26.64 135.577 26.64C136.649 26.64 137.561 26.736 138.313 26.928C139.065 27.104 139.657 27.32 140.089 27.576V30.696H139.297L138.601 28.368C137.977 27.824 136.921 27.552 135.433 27.552C134.809 27.552 134.193 27.672 133.585 27.912C132.993 28.136 132.497 28.504 132.097 29.016C131.697 29.528 131.497 30.168 131.497 30.936C131.497 31.56 131.689 32.112 132.073 32.592C132.457 33.072 132.937 33.488 133.513 33.84C134.105 34.192 134.873 34.592 135.817 35.04C136.953 35.584 137.881 36.08 138.601 36.528C139.321 36.96 139.929 37.496 140.425 38.136C140.921 38.776 141.169 39.528 141.169 40.392C141.169 42.024 140.601 43.248 139.465 44.064C138.345 44.864 136.897 45.264 135.121 45.264ZM145.623 43.92V27.864L143.679 27.696V26.808H149.247V27.696L147.351 27.864V35.688H157.167V27.864L155.247 27.696V26.808H160.743V27.696L158.895 27.864V43.92L160.935 44.208V45H155.175V44.208L157.167 43.944V36.768H147.351V43.944L149.343 44.208V45H143.607V44.208L145.623 43.92ZM165.928 43.944V27.864L163.984 27.696V26.808H169.624V27.696L167.656 27.864V43.944L169.72 44.208V45H163.936V44.208L165.928 43.944ZM180.905 26.64C182.409 26.64 183.737 27.016 184.889 27.768C186.041 28.52 186.929 29.568 187.553 30.912C188.177 32.256 188.489 33.784 188.489 35.496C188.489 37.528 188.121 39.288 187.385 40.776C186.649 42.264 185.649 43.4 184.385 44.184C183.137 44.952 181.753 45.336 180.233 45.336C178.665 45.336 177.281 44.944 176.081 44.16C174.881 43.376 173.961 42.288 173.321 40.896C172.681 39.504 172.369 37.92 172.385 36.144C172.433 34.176 172.833 32.48 173.585 31.056C174.337 29.632 175.353 28.536 176.633 27.768C177.913 27.016 179.337 26.64 180.905 26.64ZM180.545 27.624C179.329 27.624 178.249 27.96 177.305 28.632C176.361 29.304 175.625 30.28 175.097 31.56C174.569 32.84 174.305 34.368 174.305 36.144C174.305 37.696 174.561 39.096 175.073 40.344C175.585 41.592 176.313 42.576 177.257 43.296C178.201 44 179.305 44.352 180.569 44.352C181.769 44.352 182.825 44 183.737 43.296C184.649 42.592 185.353 41.592 185.849 40.296C186.361 39 186.617 37.48 186.617 35.736C186.617 34.216 186.377 32.848 185.897 31.632C185.417 30.4 184.721 29.424 183.809 28.704C182.897 27.984 181.809 27.624 180.545 27.624ZM208.092 27.768L206.052 27.96V45H204.156L195.828 31.968L194.1 28.68L194.076 43.944L196.5 44.208V45H190.74V44.208L192.804 43.944V27.96L190.812 27.792V26.808H194.628L203.052 40.32L204.78 43.488V27.96L202.74 27.768V26.808H208.092V27.768ZM220.588 24.144V47.184H219.052V24.144H220.588ZM234.29 43.92V27.888L232.226 27.696V26.808H235.13C235.818 26.808 236.658 26.776 237.65 26.712C237.89 26.696 238.21 26.68 238.61 26.664C239.026 26.648 239.394 26.64 239.714 26.64C242.61 26.64 244.794 27.408 246.266 28.944C247.754 30.464 248.498 32.624 248.498 35.424C248.498 37.408 248.106 39.136 247.322 40.608C246.554 42.064 245.466 43.184 244.058 43.968C242.666 44.736 241.066 45.12 239.258 45.12C238.89 45.12 238.258 45.104 237.362 45.072C236.626 45.024 235.89 45 235.154 45H232.178V44.208L234.29 43.92ZM236.018 43.824C237.202 44.032 238.29 44.128 239.282 44.112C240.658 44.08 241.906 43.768 243.026 43.176C244.146 42.568 245.034 41.656 245.69 40.44C246.362 39.224 246.698 37.712 246.698 35.904C246.698 33.216 246.066 31.176 244.802 29.784C243.554 28.376 241.77 27.672 239.45 27.672C238.17 27.672 237.026 27.744 236.018 27.888V43.824ZM256.761 45.264C255.689 45.264 254.625 45.152 253.569 44.928C252.513 44.704 251.793 44.48 251.409 44.256V40.752H252.273L252.825 43.152C253.257 43.584 253.849 43.888 254.601 44.064C255.369 44.24 256.161 44.328 256.977 44.328C258.129 44.328 259.113 44.048 259.929 43.488C260.761 42.912 261.177 42.032 261.177 40.848C261.177 40.176 260.969 39.584 260.553 39.072C260.153 38.544 259.641 38.088 259.017 37.704C258.393 37.32 257.585 36.888 256.593 36.408C255.537 35.896 254.657 35.424 253.953 34.992C253.265 34.544 252.689 34.008 252.225 33.384C251.761 32.76 251.529 32.032 251.529 31.2C251.529 30.176 251.817 29.32 252.393 28.632C252.985 27.944 253.713 27.44 254.577 27.12C255.457 26.8 256.337 26.64 257.217 26.64C258.289 26.64 259.201 26.736 259.953 26.928C260.705 27.104 261.297 27.32 261.729 27.576V30.696H260.937L260.241 28.368C259.617 27.824 258.561 27.552 257.073 27.552C256.449 27.552 255.833 27.672 255.225 27.912C254.633 28.136 254.137 28.504 253.737 29.016C253.337 29.528 253.137 30.168 253.137 30.936C253.137 31.56 253.329 32.112 253.713 32.592C254.097 33.072 254.577 33.488 255.153 33.84C255.745 34.192 256.513 34.592 257.457 35.04C258.593 35.584 259.521 36.08 260.241 36.528C260.961 36.96 261.569 37.496 262.065 38.136C262.561 38.776 262.809 39.528 262.809 40.392C262.809 42.024 262.241 43.248 261.105 44.064C259.985 44.864 258.537 45.264 256.761 45.264ZM270.768 43.92V27.792L265.896 27.984L265.176 30.336L264.36 30.36L264.648 26.808H278.592L278.568 30.408L277.824 30.504L277.344 27.984L272.496 27.792V43.92L275.736 44.208V45H267.696V44.208L270.768 43.92ZM286.203 43.92V37.488L280.443 27.864L279.027 27.696V26.808H284.403V27.696L282.435 27.864L286.563 35.28L287.187 36.528L287.763 35.28L291.507 27.888L289.491 27.696V26.808H294.555V27.696L292.971 27.96L287.931 37.536V43.92L290.403 44.208V45H283.827V44.208L286.203 43.92ZM298.087 43.92V27.96L296.023 27.792V26.808H302.095V27.792L299.815 27.96L299.791 43.992L306.895 43.776L308.167 40.896L308.959 41.28L308.191 45H295.975V44.208L298.087 43.92ZM312.617 43.944V27.888L310.553 27.696V26.808H322.697L323.033 30.144H322.049L321.497 27.888L314.321 27.744V34.872L319.121 34.776L319.409 32.904H320.345V37.872H319.409L319.121 35.904L314.321 35.832V44.016L322.049 43.824L323.105 41.088L323.969 41.304L323.441 45H310.505V44.208L312.617 43.944Z" />
          <path class="fill-white"
            d="M16.184 64.38V40.332L13.088 40.044V38.712H31.7L32.096 43.716L30.728 43.752L29.9 40.404L18.776 40.188V51.348L26.912 51.204L27.488 48.468H28.856V55.848H27.344L26.912 52.932L18.776 52.788V64.416L24.212 64.704V66H12.836V64.812L16.184 64.38ZM41.3306 34.716V69.276H39.0266V34.716H41.3306ZM53.0947 64.38V40.332L49.9987 40.044V38.712H54.3547C55.3867 38.712 56.6467 38.664 58.1347 38.568C58.4947 38.544 58.9747 38.52 59.5747 38.496C60.1987 38.472 60.7507 38.46 61.2307 38.46C65.5747 38.46 68.8507 39.612 71.0587 41.916C73.2907 44.196 74.4067 47.436 74.4067 51.636C74.4067 54.612 73.8187 57.204 72.6427 59.412C71.4907 61.596 69.8587 63.276 67.7467 64.452C65.6587 65.604 63.2587 66.18 60.5467 66.18C59.9947 66.18 59.0467 66.156 57.7027 66.108C56.5987 66.036 55.4947 66 54.3907 66H49.9267V64.812L53.0947 64.38ZM55.6867 64.236C57.4627 64.548 59.0947 64.692 60.5827 64.668C62.6467 64.62 64.5187 64.152 66.1987 63.264C67.8787 62.352 69.2107 60.984 70.1947 59.16C71.2027 57.336 71.7067 55.068 71.7067 52.356C71.7067 48.324 70.7587 45.264 68.8627 43.176C66.9907 41.064 64.3147 40.008 60.8347 40.008C58.9147 40.008 57.1987 40.116 55.6867 40.332V64.236Z" />
          <path class="fill-base-content"
            d="M98.048 73.296L98.848 62.64L97.28 62.512V61.872H100.496L103.632 71.072L103.952 72.16L104.304 71.056L107.264 61.872H110.288V62.512L108.736 62.64L109.664 73.296L111.184 73.472V74H107.072V73.472L108.576 73.296L107.888 65.264L107.776 62.608L107.36 64.096L104 74.112H103.6L100.352 64.944C100.16 64.4213 99.968 63.856 99.776 63.248L99.552 62.608L99.424 65.68L98.992 73.28L100.656 73.472V74H96.608V73.472L98.048 73.296ZM115.806 65.104C116.744 65.104 117.486 65.3173 118.03 65.744C118.584 66.16 118.862 66.9013 118.862 67.968L118.846 73.44H119.87V73.872C119.507 74.0427 119.059 74.128 118.526 74.128C118.206 74.128 118.003 74.0587 117.918 73.92C117.832 73.7813 117.79 73.4933 117.79 73.056C117.139 73.8027 116.2 74.176 114.974 74.176C114.515 74.176 114.083 74.08 113.678 73.888C113.283 73.696 112.963 73.4187 112.718 73.056C112.472 72.6933 112.35 72.2613 112.35 71.76C112.35 71.0347 112.638 70.4533 113.214 70.016C113.8 69.5787 114.499 69.2693 115.31 69.088C116.131 68.896 116.936 68.8 117.726 68.8V68.112C117.726 67.2907 117.534 66.72 117.15 66.4C116.766 66.0693 116.19 65.904 115.422 65.904C115.038 65.904 114.595 65.9733 114.094 66.112C113.592 66.2507 113.198 66.416 112.91 66.608L112.686 66.048C113.038 65.76 113.534 65.5307 114.174 65.36C114.814 65.1893 115.358 65.104 115.806 65.104ZM117.726 69.44C116.659 69.44 115.683 69.6107 114.798 69.952C113.923 70.2827 113.486 70.8267 113.486 71.584C113.475 72.2027 113.656 72.6613 114.03 72.96C114.403 73.2587 114.91 73.408 115.549 73.408C116.35 73.408 117.075 73.136 117.726 72.592V69.44ZM122.567 73.328V66.432L121.415 66.016V65.632L123.271 65.152L123.559 65.296V66.368C123.964 66.048 124.514 65.7547 125.207 65.488C125.9 65.2107 126.508 65.072 127.031 65.072C127.65 65.072 128.14 65.1947 128.503 65.44C128.866 65.6853 129.127 66.08 129.287 66.624C129.447 67.168 129.527 67.8987 129.527 68.816V73.328L130.791 73.472V74H127.191V73.472L128.391 73.328V68.96C128.391 68.224 128.332 67.6427 128.215 67.216C128.108 66.7787 127.916 66.4587 127.639 66.256C127.372 66.0533 126.999 65.952 126.519 65.952C126.103 65.952 125.634 66.0427 125.111 66.224C124.588 66.3947 124.119 66.624 123.703 66.912V73.328L124.935 73.472V74H121.447V73.472L122.567 73.328ZM133.713 71.824C134.236 71.952 134.636 72.256 134.913 72.736C135.191 73.216 135.329 73.712 135.329 74.224C135.34 75.0453 135.105 75.7653 134.625 76.384C134.145 77.0027 133.58 77.4453 132.929 77.712L132.657 77.36V77.184C132.903 77.0987 133.148 76.928 133.393 76.672C133.639 76.4267 133.841 76.128 134.001 75.776C134.161 75.424 134.241 75.0613 134.241 74.688C134.241 74.2187 134.124 73.8187 133.889 73.488C133.665 73.1573 133.399 72.9707 133.089 72.928V72.64L133.713 71.824ZM140.688 62.464V61.872H144.592V62.464L143.04 62.576L145.792 71.328L146.256 72.784L146.688 71.392L148.56 64L148.144 62.576L146.848 62.464V61.872H150.848V62.464L149.36 62.576L151.728 71.424L152.096 72.832L152.464 71.232L154.752 62.576L153.328 62.464V61.872H156.976V62.464L155.728 62.576L152.368 74.16H151.44L148.992 65.568L146.656 74.16H145.664L141.76 62.576L140.688 62.464ZM162.07 64.992C162.934 64.992 163.649 65.2 164.214 65.616C164.79 66.0213 165.211 66.5653 165.478 67.248C165.755 67.9307 165.894 68.6773 165.894 69.488C165.883 70.3947 165.697 71.2053 165.334 71.92C164.982 72.6347 164.497 73.1947 163.878 73.6C163.27 73.9947 162.587 74.192 161.83 74.192C160.934 74.192 160.193 73.984 159.606 73.568C159.019 73.1413 158.587 72.5813 158.31 71.888C158.033 71.184 157.894 70.4053 157.894 69.552C157.894 68.6453 158.081 67.8453 158.454 67.152C158.838 66.4587 159.35 65.9253 159.99 65.552C160.63 65.1787 161.323 64.992 162.07 64.992ZM161.894 65.648C161.019 65.648 160.331 65.9787 159.83 66.64C159.339 67.3013 159.094 68.2187 159.094 69.392C159.094 70.5973 159.334 71.584 159.814 72.352C160.294 73.12 161.019 73.504 161.99 73.504C162.865 73.504 163.531 73.168 163.99 72.496C164.459 71.8133 164.694 70.8373 164.694 69.568C164.694 68.4053 164.465 67.4613 164.006 66.736C163.547 66.0107 162.843 65.648 161.894 65.648ZM168.88 73.328V66.432L167.728 66.016V65.616L169.6 65.152L169.872 65.296V66.368C170.277 66.048 170.794 65.76 171.424 65.504C172.064 65.248 172.64 65.1147 173.152 65.104C173.717 65.0933 174.17 65.1733 174.512 65.344C174.853 65.5147 175.114 65.7973 175.296 66.192C175.658 65.9147 176.181 65.664 176.864 65.44C177.546 65.216 178.144 65.104 178.656 65.104C179.264 65.104 179.744 65.2267 180.096 65.472C180.448 65.7173 180.698 66.112 180.848 66.656C181.008 67.1893 181.088 67.9147 181.088 68.832V73.328L182.4 73.472V74H178.848V73.472L179.968 73.328V69.024C179.968 68.2667 179.92 67.6747 179.824 67.248C179.728 66.8107 179.541 66.4853 179.264 66.272C178.986 66.0587 178.576 65.952 178.032 65.952C177.637 65.952 177.21 66.0267 176.752 66.176C176.293 66.3147 175.872 66.496 175.488 66.72C175.616 67.232 175.68 67.9093 175.68 68.752V73.328L176.912 73.472V74H173.36V73.472L174.56 73.328V68.88C174.56 68.144 174.512 67.5733 174.416 67.168C174.33 66.7627 174.16 66.464 173.904 66.272C173.648 66.0693 173.264 65.968 172.752 65.968C172.357 65.968 171.904 66.0533 171.391 66.224C170.89 66.3947 170.432 66.624 170.016 66.912V73.328L171.248 73.472V74H167.776V73.472L168.88 73.328ZM187.227 65.104C188.166 65.104 188.907 65.3173 189.451 65.744C190.006 66.16 190.283 66.9013 190.283 67.968L190.267 73.44H191.291V73.872C190.929 74.0427 190.481 74.128 189.947 74.128C189.627 74.128 189.425 74.0587 189.339 73.92C189.254 73.7813 189.211 73.4933 189.211 73.056C188.561 73.8027 187.622 74.176 186.395 74.176C185.937 74.176 185.505 74.08 185.099 73.888C184.705 73.696 184.385 73.4187 184.139 73.056C183.894 72.6933 183.771 72.2613 183.771 71.76C183.771 71.0347 184.059 70.4533 184.635 70.016C185.222 69.5787 185.921 69.2693 186.731 69.088C187.553 68.896 188.358 68.8 189.147 68.8V68.112C189.147 67.2907 188.955 66.72 188.571 66.4C188.187 66.0693 187.611 65.904 186.843 65.904C186.459 65.904 186.017 65.9733 185.515 66.112C185.014 66.2507 184.619 66.416 184.331 66.608L184.107 66.048C184.459 65.76 184.955 65.5307 185.595 65.36C186.235 65.1893 186.779 65.104 187.227 65.104ZM189.147 69.44C188.081 69.44 187.105 69.6107 186.219 69.952C185.345 70.2827 184.907 70.8267 184.907 71.584C184.897 72.2027 185.078 72.6613 185.451 72.96C185.825 73.2587 186.331 73.408 186.971 73.408C187.771 73.408 188.497 73.136 189.147 72.592V69.44ZM193.989 73.328V66.432L192.837 66.016V65.632L194.693 65.152L194.981 65.296V66.368C195.386 66.048 195.936 65.7547 196.629 65.488C197.322 65.2107 197.93 65.072 198.453 65.072C199.072 65.072 199.562 65.1947 199.925 65.44C200.288 65.6853 200.549 66.08 200.709 66.624C200.869 67.168 200.949 67.8987 200.949 68.816V73.328L202.213 73.472V74H198.613V73.472L199.813 73.328V68.96C199.813 68.224 199.754 67.6427 199.637 67.216C199.53 66.7787 199.338 66.4587 199.061 66.256C198.794 66.0533 198.421 65.952 197.941 65.952C197.525 65.952 197.056 66.0427 196.533 66.224C196.01 66.3947 195.541 66.624 195.125 66.912V73.328L196.357 73.472V74H192.869V73.472L193.989 73.328Z" />
        </svg>
      </a>
      <div class="w-full flex items-center justify-center gap-1">
        <a href="https://webk.telegram.org" target="_blank" class="btn btn-ghost btn-navig p-2">
          <img src="./assets/icons/telegram.svg" alt="">
        </a>
        <a href="https://vk.com/feed" target="_blank" class="btn btn-ghost btn-navig p-2">
          <img src="./assets/icons/vk.svg" alt="">
        </a>
      </div>
      <div
        class="w-full flex flex-col xs:items-end items-center justify-center justify-self-end gap-3 sm:text-sm text-xs text-right">
        <a class="link link-hover">+7 777 231 33 44</a>
        <a class="link link-hover">fashion.ds@gmail.com</a>
      </div>
    </div>
    <div
      class="flex items-center sm:flex-row flex-col gap-6 py-12 2xl:px-40 xs:px-10 px-5 bg-base-100 text-base-content border-base-300">
      <div
        class="flex w-full items-center sm:justify-start justify-center xs:text-xs text-xxs xs:text-left text-center sm:order-1 order-2">
        © Все права защищены - FASHION | DSTYLE, 2024
      </div>
      <div class="flex flex-col w-full items-center sm:order-2 xs:text-base text-sm">
        <nav class="flex flex-wrap justify-center xs:gap-4 gap-2">
          <a href="#about" class="link link-hover">О нас</a>
          <a href="#sale" class="link link-hover">Распродажа</a>
          <a href="#" class="link link-hover">Популярное</a>
          <a href="#catalog" class="link link-hover">Каталог</a>
        </nav>
      </div>
      <div class="flex flex-col w-full sm:items-end items-center sm:text-sm text-xs sm:order-2 order-1">
        <span>г. Алматы</span>
        <span>Кабанбай б. 279</span>
      </div>
    </div>
  </footer>

  <!-- To top arrow -->
  <!-- <button class="btn btn-square btn-neutral navig-hover outline outline-2 outline-accent border-none fixed right-5 bottom-5 group">
      <svg class="h-5 w-5 group-hover:fill-neutral fill-accent group-hover:stroke-neutral stroke-accent" version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="-19.8 -19.8 369.60 369.60" xml:space="preserve" stroke="#000000" stroke-width="12.870000000000001">
        <g id="SVGRepo_bgCarrier" stroke-width="0"></g>
        <g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g>
        <g id="SVGRepo_iconCarrier">
          <path id="XMLID_224_" d="M325.606,229.393l-150.004-150C172.79,76.58,168.974,75,164.996,75c-3.979,0-7.794,1.581-10.607,4.394 l-149.996,150c-5.858,5.858-5.858,15.355,0,21.213c5.857,5.857,15.355,5.858,21.213,0l139.39-139.393l139.397,139.393 C307.322,253.536,311.161,255,315,255c3.839,0,7.678-1.464,10.607-4.394C331.464,244.748,331.464,235.251,325.606,229.393z"></path> 
        </g>
      </svg>
    </button> -->

  <!-- Open the modal using ID.showModal() method -->
  <dialog id="my_modal_1" class="modal">
    <div class="modal-box">
      
      <form method="dialog">
        <div class="flex items-center justify-between">
          <h3 class="font-medium text-xl h-fit">Корзина</h3>
          <button class="btn btn-square btn-ghost rounded-lg">
            <svg class="w-10 h-10" viewBox="0 -0.5 25 25" fill="none" xmlns="http://www.w3.org/2000/svg">
              <path class="fill-base-content"
                d="M6.96967 16.4697C6.67678 16.7626 6.67678 17.2374 6.96967 17.5303C7.26256 17.8232 7.73744 17.8232 8.03033 17.5303L6.96967 16.4697ZM13.0303 12.5303C13.3232 12.2374 13.3232 11.7626 13.0303 11.4697C12.7374 11.1768 12.2626 11.1768 11.9697 11.4697L13.0303 12.5303ZM11.9697 11.4697C11.6768 11.7626 11.6768 12.2374 11.9697 12.5303C12.2626 12.8232 12.7374 12.8232 13.0303 12.5303L11.9697 11.4697ZM18.0303 7.53033C18.3232 7.23744 18.3232 6.76256 18.0303 6.46967C17.7374 6.17678 17.2626 6.17678 16.9697 6.46967L18.0303 7.53033ZM13.0303 11.4697C12.7374 11.1768 12.2626 11.1768 11.9697 11.4697C11.6768 11.7626 11.6768 12.2374 11.9697 12.5303L13.0303 11.4697ZM16.9697 17.5303C17.2626 17.8232 17.7374 17.8232 18.0303 17.5303C18.3232 17.2374 18.3232 16.7626 18.0303 16.4697L16.9697 17.5303ZM11.9697 12.5303C12.2626 12.8232 12.7374 12.8232 13.0303 12.5303C13.3232 12.2374 13.3232 11.7626 13.0303 11.4697L11.9697 12.5303ZM8.03033 6.46967C7.73744 6.17678 7.26256 6.17678 6.96967 6.46967C6.67678 6.76256 6.67678 7.23744 6.96967 7.53033L8.03033 6.46967ZM8.03033 17.5303L13.0303 12.5303L11.9697 11.4697L6.96967 16.4697L8.03033 17.5303ZM13.0303 12.5303L18.0303 7.53033L16.9697 6.46967L11.9697 11.4697L13.0303 12.5303ZM11.9697 12.5303L16.9697 17.5303L18.0303 16.4697L13.0303 11.4697L11.9697 12.5303ZM13.0303 11.4697L8.03033 6.46967L6.96967 7.53033L11.9697 12.5303L13.0303 11.4697Z" />
            </svg>
          </button>
        </div>
      </form>

      <form name="basket" method="post" action="./php/handler.php">
        <div class="divider"></div>

        <div class="grid gap-5">
          <div class="flex xs:flex-row flex-col gap-5">
            <div class="xs:w-2/3 w-full flex gap-3">
              <img class="w-24 object-cover" src="./assets/images/items/image1.jpg" alt="">
              <div class="flex flex-col gap-2 justify-between">
                <div class="text-sm max-h-14 text-ellipsis overflow-hidden">
                  Парка зимняя женская
                  «Мариинка»
                  Фуксия
                </div>
                <div class="icontent">
                  <div class="text-xs mb-2">Размер:</div>
                  <select name="size" class="select select-bordered w-full max-w-xs">
                    <option value="x">X</option>
                    <option value="xl">XL</option>
                    <option value="xxl">XXL</option>
                  </select>
                </div>
              </div>
            </div>
            <div class="xs:w-1/3 w-full flex xs:flex-col flex-row justify-around">
              <div class="w-full flex xs:justify-end justify-center items-center ">
                <div class="w-5 h-5 min-h-5 btn btn-circle btn-outline group" onclick="SubstarctValue('itemQuantity', 1, 'price')">
                  <svg width="8" height="2" viewBox="0 0 8 2" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path class="group-hover:invert stroke-base-content" d="M0 1H7.5" />
                  </svg>
                </div>
                <input id="itemQuantity" class="input w-8 h-fit m-0 p-0 bg-none border-none pointer-events-none text-center" type="number" value="1" name="quantity"/>
                <!-- <div id="itemQuantity">1</div> -->
                <div class="w-5 h-5 min-h-5 btn btn-circle btn-outline group" onclick="AddValue('itemQuantity', 15, 'price')">
                  <svg width="8" height="8" viewBox="0 0 8 8" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path class="group-hover:invert stroke-base-content" d="M0 4H8" />
                    <path class="group-hover:invert stroke-base-content" d="M4 0V8" />
                  </svg>
                </div>
              </div>
              <div class="w-full flex xs:justify-end justify-center items-center gap-2">
                <div class="grid gap-1">
                  <div class="flex">
                    <div id="price" class="mr-2">35000</div>
                    <div>Тг.</div>
                  </div>
                </div>
                <div class="w-5 h-5 min-h-5 btn btn-circle btn-outline group"
                  onclick="ResetValue('itemQuantity', 1, 'price')">
                  <svg width="12" height="12" viewBox="0 0 12 12" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path class="group-hover:invert stroke-base-content" d="M3.23389 8.88959L8.76555 3.11026" />
                    <path class="group-hover:invert stroke-base-content" d="M3.11005 3.23413L8.88938 8.7658" />
                  </svg>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="divider"></div>
        <div class="text-right font-medium mb-1.5">Сумма: 35.000 Тг.</div>

        <!-- if there is a button in form, it will close the modal -->
        <div class="font-medium mb-1.5">Данные</div>
        <div class="grid gap-2 mb-4">
          <input type="text" placeholder="Ваше имя" class="input input-bordered w-full" name="name" required/>
          <input type="text" placeholder="Почта" class="input input-bordered w-full" name="email" required/>
          <input type="text" placeholder="Номер телефона" class="input input-bordered w-full" name="phone" required/>
        </div>
        <div class="font-medium mb-1.5">Доставка</div>
        <div class="grid gap-1.5 mb-4">
          <input type="text" placeholder="Город" class="input input-bordered w-full" required/>
        </div>
        <div class="font-medium mb-2">Способ оплаты</div>
        <div class="grid gap-1.5">
          <div class="flex items-center">
            <input type="radio" name="radio-1" value="visa" class="radio mr-2.5" required/>
            <span>Кредитной картой (Visa, Mastercard)</span>
          </div>
          <div class="flex items-center">
            <input type="radio" name="radio-1" value="kaspi" class="radio mr-2.5" required/>
            <span>Кредитной картой (Kaspi)</span>
          </div>
        </div>
        <div class="text-right font-medium my-6">Итоговая сумма: 35.000 Тг.</div>
        <input type="submit" value="Купить" class="btn w-full" />

        <div class="text-center text-sm mt-4">
          Нажимая на кнопку "Купить", вы даете согласие на
          обработку персональных данных в соответствии с
          <span class="underline font-medium">политикой конфиденциальности</span>, а так же с
          <span class="underline font-medium">публичной офертой</span>
        </div>

      </form>
    </div>

    <form method="dialog" class="modal-backdrop">
      <button>close</button>
    </form>
  </dialog>

  <script src="./scripts/main.js"></script>
  <script src="../swiper/swiper.js"></script>
  <script src="../swiper.config.js"></script>
</body>

</html>