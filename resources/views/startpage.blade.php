@extends('layouts.app')

@section('content')
<div>
    <!-- Static sidebar for desktop -->
    <div class="hidden md:fixed md:inset-y-0 md:flex md:w-64 md:flex-col">
      <!-- Sidebar component, swap this element with another sidebar if you like -->
      <div class="flex flex-col flex-1 min-h-0 bg-gray-800">
        <div class="flex items-center flex-shrink-0 h-16 px-4 bg-gray-900">
          <svg class="object-fill w-auto h-auto fill-red-600" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1190.5495 290.056">
            <g aria-label="Feuerwehr">
              <path d="M472.37524 164.45101h-9.15234v4.3828h7.23307v3.65234h-7.23307v7.64843h-4.7552v-19.55076h13.90754zM486.87001 173.61766h-9.30988q-.0143.38672-.0143.67318 0 1.54687.81641 2.33463.83073.78776 1.97656.78776 2.13411 0 2.5638-2.27734l3.86718.28646q-1.61849 5.01301-6.57421 5.01301-2.16276 0-3.68099-.85937-1.5039-.8737-2.49218-2.53515-.97396-1.66146-.97396-3.98177 0-3.45182 1.96224-5.57161 1.97656-2.11979 5.07031-2.11979 2.79296 0 4.78384 1.97656 2.00521 1.96224 2.00521 6.27343zm-9.32421-2.47786h5.14192q-.20052-2.97916-2.44921-2.97916-2.40625 0-2.69271 2.97916zM501.92338 165.66845v14.46613h-3.95312v-2.46354q-1.11719 2.76432-4.26823 2.76432-1.63281 0-2.5065-.60156-.8737-.61588-1.26042-1.66145-.37239-1.0599-.37239-3.05078v-9.45312h4.13931v9.45312q0 1.94791 1.60417 1.94791.8164 0 1.41797-.45833.60156-.47266.75911-1.0026.17187-.52995.17187-1.81901v-8.12109zM518.43768 173.61766h-9.30988q-.0143.38672-.0143.67318 0 1.54687.8164 2.33463.83073.78776 1.97656.78776 2.13411 0 2.5638-2.27734l3.86718.28646q-1.61848 5.01301-6.57421 5.01301-2.16276 0-3.68098-.85937-1.50391-.8737-2.49219-2.53515-.97395-1.66146-.97395-3.98177 0-3.45182 1.96223-5.57161 1.97656-2.11979 5.07031-2.11979 2.79296 0 4.78385 1.97656 2.0052 1.96224 2.0052 6.27343zm-9.3242-2.47786h5.14192q-.20052-2.97916-2.44922-2.97916-2.40625 0-2.6927 2.97916zM525.26971 180.13458h-4.13932v-14.46613h3.91015v2.69271q.90234-3.00781 3.12239-3.00781.31511 0 .77344.043v4.21093q-1.30339 0-2.03385.40104-.71615.40104-1.17448 1.44661-.45833 1.03125-.45833 2.79297zM550.95066 165.66845l-4.35416 14.46613h-3.76692l-2.29167-9.30988-2.27734 9.30988h-3.59505l-4.45442-14.46613h4.45442l2.34896 8.83723 2.20573-8.83723h3.86718l2.11979 8.89452 2.44922-8.89452zM565.67461 173.61766h-9.30989q-.0143.38672-.0143.67318 0 1.54687.8164 2.33463.83073.78776 1.97656.78776 2.13412 0 2.5638-2.27734l3.86719.28646q-1.61849 5.01301-6.57421 5.01301-2.16276 0-3.68099-.85937-1.5039-.8737-2.49218-2.53515-.97396-1.66146-.97396-3.98177 0-3.45182 1.96224-5.57161 1.97656-2.11979 5.0703-2.11979 2.79297 0 4.78385 1.97656 2.00521 1.96224 2.00521 6.27343zm-9.32421-2.47786h5.14192q-.20052-2.97916-2.44922-2.97916-2.40624 0-2.6927 2.97916zM572.50663 160.58382v7.06119q1.17448-2.27734 3.91016-2.27734 1.46093 0 2.49218.64453 1.04557.63021 1.46094 1.63281.42968 1.00261.42968 2.9362v9.55337h-4.2539v-8.14973q0-1.46093-.11458-2.0052-.11459-.54427-.52995-.90235-.40104-.37239-1.01693-.37239-.80208 0-1.58984.63021-.78776.61588-.78776 2.64973v8.14973h-4.13931v-19.55076zM588.46234 180.13458h-4.13931v-14.46613h3.91015v2.69271q.90234-3.00781 3.12239-3.00781.3151 0 .77344.043v4.21093q-1.30339 0-2.03385.40104-.71615.40104-1.17448 1.44661-.45834 1.03125-.45834 2.79297z" style="-inkscape-font-specification:'Franklin Gothic Demi'" transform="translate(-.0506 -.9157)"/>
            </g>
            <g aria-label="Bamberg">
              <path d="M848.72945 160.58401h9.10936q2.44922 0 3.68099.60156t2.03385 1.71875q.80208 1.11718.80208 2.72135 0 3.2513-3.52343 4.33984 2.03385.45833 3.05078 1.819 1.01692 1.36068 1.01692 2.96485 0 2.1914-1.66145 3.79556-1.66146 1.58985-5.39974 1.58985h-9.10936zm4.569 3.45182v4.28254h3.46615q1.90494 0 2.39192-.74479.5013-.75911.5013-1.44661 0-.74479-.41536-1.27474-.40104-.54427-.88802-.67318-.48698-.14322-1.91927-.14322zm0 7.76301v4.71223h3.52344q1.80468 0 2.54947-.63021.74479-.6302.74479-1.76171 0-.94531-.71614-1.63281-.71615-.6875-2.3776-.6875zM880.26848 180.13477h-4.13932q-.20052-.85938-.20052-2.26302-1.08854 1.54687-2.17708 2.0625-1.07422.5013-2.44922.5013-2.03385 0-3.29427-1.10287-1.24609-1.10286-1.24609-2.96484 0-1.36067.73047-2.5065.73047-1.14584 2.34895-1.79037 1.61849-.65885 5.90104-.97395v-.83073q0-2.10547-2.10547-2.10547-2.24869 0-2.50651 2.10547l-3.93879-.3724q.38672-2.46354 2.33463-3.49479 1.94791-1.03124 4.41145-1.03124 1.47526 0 2.77865.34375 1.30338.34374 2.03385 1.03124.73047.6875.98828 1.46094.25781.75911.25781 2.66406v6.55989q0 1.89062.27214 2.70703zm-4.52604-6.93229q-4.48307.44401-4.48307 2.70703 0 .75911.47266 1.31771.47265.54427 1.34635.54427 1.13151 0 1.89062-.93099.77344-.94531.77344-2.32031zM904.1734 180.13477h-4.26823v-8.00651q0-1.6901-.10026-2.1914-.10026-.51562-.52995-.84505-.41536-.34375-1.16015-.34375-.70182 0-1.43229.5013-.73047.5013-.73047 2.8789v8.00651h-4.2539v-8.00651q0-1.73307-.15755-2.23437-.15755-.51562-.60156-.83073-.42969-.3151-1.10287-.3151-1.10286 0-1.64713.70182-.52995.6875-.52995 2.67838v8.00651h-4.13932v-14.46613h4.01042v2.20572q1.01692-2.5065 4.0677-2.5065 2.76432 0 3.99609 2.5065 1.20312-2.5065 4.19661-2.5065 1.43229 0 2.46354.58723 1.03125.58724 1.47526 1.53255.44401.94532.44401 3.2513zM911.96505 160.58401v6.90363q1.14584-2.11978 3.58073-2.11978 2.49218 0 3.9388 2.01952 1.44661 2.00521 1.44661 5.51432 0 3.38021-1.48958 5.45703-1.48958 2.07682-4.29687 2.07682-1.46094 0-2.3776-.5013-.91667-.50131-1.84766-2.01953-.40104.41536-.94531 2.22005h-2.27734v-19.55076zm0 13.8216q0 1.51822.63021 2.29166.64453.77344 1.53255.77344 1.0599 0 1.74739-.93099.6875-.94531.6875-3.65234 0-3.07943-.71614-3.86718-.70182-.78776-1.60417-.78776-1.04557 0-1.66145.88802-.61589.88802-.61589 2.52083zM936.65773 173.61785h-9.30988q-.0143.38671-.0143.67317 0 1.54688.81641 2.33464.83073.78775 1.97656.78775 2.13411 0 2.5638-2.27734l3.86718.28646q-1.61849 5.01302-6.57421 5.01302-2.16276 0-3.68099-.85938-1.5039-.87369-2.49218-2.53515-.97396-1.66146-.97396-3.98177 0-3.45182 1.96224-5.57161 1.97656-2.11978 5.07031-2.11978 2.79296 0 4.78384 1.97656 2.00521 1.96223 2.00521 6.27343zm-9.32421-2.47787h5.14192q-.20052-2.97916-2.44921-2.97916-2.40625 0-2.69271 2.97916zM943.48976 180.13477h-4.13932v-14.46613h3.91015v2.6927q.90234-3.00781 3.12239-3.00781.31511 0 .77344.043v4.21093q-1.30338 0-2.03385.40105-.71615.40104-1.17448 1.44661-.45833 1.03125-.45833 2.79296zM963.98582 165.99806q-.67317-.14323-1.13151-.14323-1.41796 0-1.66145 1.26042 1.16015 1.21745 1.16015 2.75 0 2.04817-1.71874 3.26562-1.70443 1.21744-4.92708 1.21744-1.14583 0-2.23437-.21484-.73047.42969-.73047 1.10286 0 .74479.61588.98828.61589.24349 2.96484.35808 3.33724.17187 4.59765.41536 1.26042.24349 2.11979 1.17448.85938.93099.85938 2.32031 0 1.99088-1.84766 3.36588-1.83333 1.375-6.51692 1.375-4.39713 0-5.92968-.95964-1.53255-.94531-1.53255-2.40624 0-1.93359 2.47786-2.60677-1.83333-.91667-1.83333-2.57812 0-2.07682 2.89323-3.23698-2.5638-1.05989-2.5638-3.53776 0-2.01952 1.76172-3.27994 1.77604-1.26041 4.89843-1.26041 1.97656 0 3.82421.6302.12891-1.23177.71615-2.01953.60156-.80208 2.53515-.80208.63021 0 1.20312.11458zm-8.30728 1.67578q-1.10286 0-1.73307.60156-.61588.58724-.61588 1.5612 0 2.20573 2.36327 2.20573 1.14584 0 1.79037-.64453.65885-.64453.65885-1.5612 0-.85937-.61588-1.5039-.61589-.65886-1.84766-.65886zm-2.85026 12.36067q-.25781 0-.65885.34374-.38672.34375-.38672.83073 0 .97396 1.2461 1.21745 1.24609.24349 2.92187.24349 2.1914 0 3.0651-.32943.88802-.32942.88802-1.05989 0-.5586-.74479-.85938-.73047-.30078-3.92448-.30078l-.85937.0143q-.78776 0-1.0599-.043-.30078-.0573-.48698-.0573z" style="-inkscape-font-specification:'Franklin Gothic Demi'" transform="translate(-.0506 -.9157)"/>
            </g>
            <g aria-label="Feuerwache Ost">
              <path d="M216.38882 222.61343h-39.10536v18.72651h30.90486v15.60543h-30.90486v32.6796H156.9658v-83.53493h59.42302zM278.32095 261.77999h-39.77854q-.0612 1.65234-.0612 2.8763 0 6.60935 3.48827 9.97523 3.54947 3.36588 8.44529 3.36588 9.11847 0 10.9544-9.73045l16.52339 1.22396q-6.91534 21.41921-28.08976 21.41921-9.24087 0-15.72783-3.67186-6.42576-3.73307-10.64841-10.83201-4.16144-7.09893-4.16144-17.01297 0-14.74866 8.38409-23.80593 8.44529-9.05726 21.664-9.05726 11.93357 0 20.44005 8.44529 8.56769 8.38409 8.56769 26.80461zm-39.83974-10.58721h21.96999q-.85676-12.72913-10.46481-12.72913-10.28122 0-11.50518 12.72913zM342.6398 227.81524v61.80973h-16.89058v-10.52601q-4.77343 11.81116-18.23693 11.81116-6.97655 0-10.70961-2.5703-3.73306-2.63151-5.3854-7.09894-1.59114-4.52864-1.59114-13.03512v-40.39052h17.68615v40.39052q0 8.32289 6.85415 8.32289 3.48827 0 6.05857-1.95833 2.57031-2.01952 3.24348-4.28384.73438-2.26432.73438-7.77212v-34.69912zM413.2008 261.77999h-39.77854q-.0612 1.65234-.0612 2.8763 0 6.60935 3.48827 9.97523 3.54947 3.36588 8.4453 3.36588 9.11846 0 10.95439-9.73045l16.5234 1.22396q-6.91535 21.41921-28.08977 21.41921-9.24086 0-15.72783-3.67186-6.42576-3.73307-10.6484-10.83201-4.16145-7.09893-4.16145-17.01297 0-14.74866 8.38409-23.80593 8.44529-9.05726 21.66401-9.05726 11.93356 0 20.44005 8.44529 8.56768 8.38409 8.56768 26.80461zm-39.83974-10.58721h21.97q-.85677-12.72913-10.46482-12.72913-10.28122 0-11.50518 12.72913zM442.39214 289.62497h-17.68615v-61.80973h16.70699v11.50518q3.85545-12.85153 13.34111-12.85153 1.34635 0 3.30467.18359v17.99214q-5.56899 0-8.69008 1.71354-3.05988 1.71353-5.01821 6.18097-1.95833 4.40624-1.95833 11.93356zM552.11969 227.81524l-18.60412 61.80973h-16.095l-9.79165-39.77854-9.73044 39.77854h-15.36063l-19.03251-61.80973h19.03251l10.03643 37.75901 9.42445-37.75901h16.52339l9.05727 38.0038 10.46482-38.0038zM613.19504 289.62497h-17.68615q-.85677-3.67187-.85677-9.66925-4.65103 6.60936-9.30206 8.81248-4.58983 2.14192-10.46481 2.14192-8.69008 0-14.07549-4.71222-5.3242-4.71223-5.3242-12.66794 0-5.81379 3.12109-10.70961 3.12108-4.89582 10.03643-7.64972 6.91534-2.81509 25.21347-4.16144v-3.54947q0-8.99607-8.99607-8.99607-9.60805 0-10.7096 8.99607l-16.82939-1.59114q1.65234-10.52602 9.97524-14.93226 8.32289-4.40623 18.8489-4.40623 6.30337 0 11.87237 1.46874 5.56899 1.46875 8.69008 4.40624 3.12109 2.93749 4.22265 6.24217 1.10155 3.24348 1.10155 11.38278v28.02857q0 8.07811 1.16276 11.56638zm-19.33849-29.61971q-19.1549 1.89713-19.1549 11.56637 0 3.24348 2.01953 5.6302 2.01953 2.32551 5.75259 2.32551 4.83462 0 8.0781-3.97785 3.30468-4.03906 3.30468-9.91404zM681.43055 266.43102q-1.04037 10.9544-8.69009 17.74735-7.58852 6.73175-19.64447 6.73175-13.09632 0-21.35802-8.62888-8.2005-8.69008-8.2005-23.19395 0-14.50387 8.38409-23.49994 8.44529-9.05726 22.52078-9.05726 11.32158 0 18.72651 6.79295 7.46612 6.79295 8.2617 17.01297l-17.01298.97917q-.85677-11.138-9.66925-11.138-10.832 0-10.832 17.74735 0 11.81117 2.99869 14.99345 3.05989 3.18229 7.40493 3.18229 8.44529 0 10.09763-10.70961zM709.76516 206.09004v30.17049q5.01821-9.73044 16.70698-9.73044 6.24217 0 10.64841 2.75389 4.46744 2.69271 6.24217 6.97655 1.83594 4.28384 1.83594 12.54554v40.8189h-18.17574v-34.82152q0-6.24217-.48958-8.56769-.48958-2.32551-2.26432-3.85546-1.71353-1.59114-4.34504-1.59114-3.42707 0-6.79295 2.6927-3.36587 2.63151-3.36587 11.32159v34.82152h-17.68615v-83.53493zM815.75962 261.77999h-39.77854q-.0612 1.65234-.0612 2.8763 0 6.60935 3.48827 9.97523 3.54947 3.36588 8.44529 3.36588 9.11846 0 10.9544-9.73045l16.52339 1.22396q-6.91535 21.41921-28.08977 21.41921-9.24086 0-15.72782-3.67186-6.42577-3.73307-10.64841-10.83201-4.16145-7.09893-4.16145-17.01297 0-14.74866 8.38409-23.80593 8.44529-9.05726 21.66401-9.05726 11.93356 0 20.44005 8.44529 8.56768 8.38409 8.56768 26.80461zm-39.83973-10.58721h21.96999q-.85677-12.72913-10.46482-12.72913-10.28122 0-11.50517 12.72913zM890.84926 290.91012q-16.89058 0-26.13144-12.66793-9.24086-12.66794-9.24086-30.66008 0-18.29813 9.36326-30.53768 9.36326-12.23955 26.68222-12.23955 17.50256 0 26.37623 13.09632 8.93487 13.03512 8.93487 29.86451 0 18.17573-9.17966 30.66007t-26.80462 12.48434zm.55078-70.13262q-15.42183 0-15.42183 27.0494 0 27.11061 15.42183 27.11061 14.93226 0 14.93226-27.04941 0-27.1106-14.93226-27.1106zM984.9714 242.74749l-13.27991 3.54947q-2.32552-8.38409-12.05596-8.38409-9.17966 0-9.17966 5.56899 0 2.20312 1.65234 3.54947 1.71353 1.28516 8.81247 2.20312 10.58721 1.40755 15.66663 3.24348 5.07941 1.83594 8.0169 6.18098 2.99869 4.34504 2.99869 10.7096 0 9.54685-7.28253 15.54423-7.22133 5.99738-20.25646 5.99738-23.62233 0-28.21216-18.29813l15.36064-2.26431q1.89713 8.32289 13.70829 8.32289 4.52864 0 7.64972-1.59114 3.12109-1.65234 3.12109-4.40624 0-4.28384-6.91535-5.07941-18.72651-2.32552-24.66269-7.16014-5.87499-4.89582-5.87499-13.5859 0-8.81248 6.85415-14.56507 6.85415-5.75258 19.21609-5.75258 9.79165 0 15.66663 3.85545 5.87498 3.85546 8.99607 12.36195zM1019.4869 242.01312v26.13144q0 4.89582 1.4688 6.54816 1.4687 1.65234 6.9153 1.65234 2.5091 0 5.8138-.24479v13.5247q-7.9557 1.34635-11.444 1.34635-11.3828 0-16.1562-4.34504-4.7734-4.40624-4.7734-15.85022v-28.76294h-9.79164v-14.19788h10.83204l1.4687-18.23693 15.6666-1.22396v19.46089h13.3411v14.19788z" style="-inkscape-font-specification:'Franklin Gothic Demi'" transform="translate(-.0506 -.9157)"/>
            </g>
            <g aria-label="Stadt-Silhouette">
              <path d="M1190.5494 189.0743h-198.32v-17.248l-4.8183-2.3217v-8.792l-5.6321-4.4058-1.9488-52.726-9.2751-51.44-9.2493 51.299v48.393l-14.892-14.244-11.773 11.697h-16.049v-53.645l-9.2498-51.299-9.2493 51.299v48.049l-15.338.5864v-33.488l-7.9778-30.708-7.9783 30.708v34.036l-26.075 1.8171v-35.853l-7.9782-30.708-7.9778 30.708v36.757l-6.375 6.1911v25.787h-88.101v-23.865l3.7952-.156c.3008-.0123.8476-.1424 1.5342-.3741h-5.3294v-42.197l3.7952-.1559c.0865-.004.2647-.1357.5049-.3741h-6.9418l-17.459-9.6188v-20.202h3.8202c-.2556-.5552-.5644-1.0591-.9175-1.5005-.8783-1.098-2.0318-1.7772-3.2519-1.7772h-3.6398c-1.2207 0-2.3743.6791-3.2525 1.7769-.3532.4415-.6621.9455-.9177 1.5008h3.8209v20.202l-17.46 9.6188h-6.9415c.2402.2384.4183.3706.5047.3741l3.7951.156v66.592h-87.895v-29.726h-2.6728v-4.2523h-3.288v-4.6664h-3.2888v-4.2356h-.6586c-1.6933 1.3293-3.3819 2.6653-5.0728 3.9978l-12.489-20.542-9.3757 17.049v-22.511h-7.738v-56.146l-2.3648-2.1406v-7.6574l-1.5171-1.4886h-2.563l-1.5172 1.4886v7.6575l-2.3648 2.1404v56.146h-7.1359v16.741c-17.677-.012-35.355-.0199-53.032-.0366v11.529h-26.365l-7.7716 15.962v20.162l-449.53 63.869L0 235.0568l442.74-62.904v-15.128l10.737-22.053h23.4v-11.504l2.9114.002v-3.4307l7.1741-26.1 7.1726 26.1v3.441l35.774.0245v-16.767h7.1359v-43.053h-9.5585l10.989-9.946h-7.5557l14.71-14.433h8.9549l14.71 14.433h-7.5559l10.988 9.946h-9.5569v39.355h7.738l12.647 20.296v-2.4571h11.768v7.8657h3.1806v4.2356h3.2887v4.6664h3.2881v4.2522h2.6727v29.726h72.097v-52.298c-1.2762-.7738-2.5342-1.8601-3.5582-3.1856-1.5382-1.9912-2.7106-4.5994-2.8054-7.5658l-.1302-4.0729h15.032l11.564-6.3706v-7.6529h-4.6428v-3.9494c0-3.9889 1.3368-7.6545 3.4982-10.356 2.3577-2.9469 5.6748-4.7698 9.3928-4.7698v-21.628h3.6398v21.628c3.7174 0 7.0345 1.823 9.3921 4.7701 2.1613 2.7018 3.4982 6.3673 3.4982 10.356v3.9494h-4.6421v7.653l11.563 6.3705h15.033l-.1308 4.0729c-.0952 2.9668-1.2678 5.5751-2.806 7.5662-1.0242 1.3255-2.2821 2.4117-3.5583 3.1854v27.902h12.084l-.1301 4.0729c-.1047 3.2776-2.3146 5.9036-5.1662 7.8709-2.0608 1.4217-4.6332 2.5569-6.7878 3.2869v9.1647h72.303v-21.197l6.3749-6.1911v-34.354l15.876-61.112 15.878 61.112v28.304l10.277-.7162v-27.588l15.877-61.112 15.417 59.342V95.108c5.7165-31.702 11.432-63.405 17.148-95.108l17.149 95.108v46.279h4.9252l14.879-14.783 7.1117 6.8023v-30.499c5.7165-31.702 11.432-63.405 17.148-95.108 5.7078 31.656 11.419 63.311 17.124 94.967l1.8332 49.598 5.7984 4.5358v7.6636l4.8183 2.3217v14.29h190.42v7.8989zm-546.19 13.434h26.953c-1.1174-3.1486-3.5327-6.0116-6.8488-8.3124-5.0856-3.5286-12.189-5.7111-20.105-5.7111-7.915 0-15.018 2.1826-20.104 5.7113-3.3158 2.3007-5.731 5.1636-6.8484 8.3122h26.952zm31.596 7.8989h-67.14l.0001-3.9495c0-7.4214 4.1907-14.04 10.966-18.741 6.3494-4.4056 15.044-7.1306 24.578-7.1306 9.5344 0 18.229 2.7249 24.579 7.1305 6.7757 4.7012 10.966 11.32 10.966 18.741v3.9495h-3.9495zm99.727 0h-35.544v-3.9495c0-7.4214 4.1907-14.04 10.966-18.741 6.3494-4.4056 15.044-7.1306 24.578-7.1306 9.5342 0 18.229 2.7249 24.578 7.1306 6.7757 4.7012 10.967 11.32 10.967 18.741v3.9495zm-26.952-7.8989h53.906c-1.1175-3.1486-3.5328-6.0115-6.8489-8.3122-5.0857-3.5287-12.189-5.7113-20.104-5.7113-7.915 0-15.018 2.1826-20.104 5.7113-3.3158 2.3007-5.731 5.1636-6.8484 8.3122z"/>
            </g>
          </svg>
          <!--<img class="w-auto h-auto text-red-600" src="/assets/images/feuerwache_ost_logo.svg" alt="Feuerwache Ost">-->
        </div>
        <div class="flex flex-col flex-1 overflow-y-auto">
          <nav class="flex-1 px-2 py-4 space-y-1">
            <!-- Current: "bg-gray-900 text-white", Default: "text-gray-300 hover:bg-gray-700 hover:text-white" -->
            <a href="#" class="flex items-center px-2 py-2 text-sm font-medium text-white bg-gray-900 rounded-md group">
              <!--
                Heroicon name: outline/home
  
                Current: "text-gray-300", Default: "text-gray-400 group-hover:text-gray-300"
              -->
              <svg class="flex-shrink-0 w-6 h-6 mr-3 text-gray-300" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" aria-hidden="true">
                <path stroke-linecap="round" stroke-linejoin="round" d="M2.25 12l8.954-8.955c.44-.439 1.152-.439 1.591 0L21.75 12M4.5 9.75v10.125c0 .621.504 1.125 1.125 1.125H9.75v-4.875c0-.621.504-1.125 1.125-1.125h2.25c.621 0 1.125.504 1.125 1.125V21h4.125c.621 0 1.125-.504 1.125-1.125V9.75M8.25 21h8.25" />
              </svg>
              Dashboard
            </a>
  
            <a href="#" class="flex items-center px-2 py-2 text-sm font-medium text-gray-300 rounded-md hover:bg-gray-700 hover:text-white group">
              <!-- Heroicon name: outline/users -->
              <svg class="flex-shrink-0 w-6 h-6 mr-3 text-gray-400 group-hover:text-gray-300" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" aria-hidden="true">
                <path stroke-linecap="round" stroke-linejoin="round" d="M15 19.128a9.38 9.38 0 002.625.372 9.337 9.337 0 004.121-.952 4.125 4.125 0 00-7.533-2.493M15 19.128v-.003c0-1.113-.285-2.16-.786-3.07M15 19.128v.106A12.318 12.318 0 018.624 21c-2.331 0-4.512-.645-6.374-1.766l-.001-.109a6.375 6.375 0 0111.964-3.07M12 6.375a3.375 3.375 0 11-6.75 0 3.375 3.375 0 016.75 0zm8.25 2.25a2.625 2.625 0 11-5.25 0 2.625 2.625 0 015.25 0z" />
              </svg>
              Team
            </a>
  
            <a href="#" class="flex items-center px-2 py-2 text-sm font-medium text-gray-300 rounded-md hover:bg-gray-700 hover:text-white group">
              <!-- Heroicon name: outline/folder -->
              <svg class="flex-shrink-0 w-6 h-6 mr-3 text-gray-400 group-hover:text-gray-300" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" aria-hidden="true">
                <path stroke-linecap="round" stroke-linejoin="round" d="M2.25 12.75V12A2.25 2.25 0 014.5 9.75h15A2.25 2.25 0 0121.75 12v.75m-8.69-6.44l-2.12-2.12a1.5 1.5 0 00-1.061-.44H4.5A2.25 2.25 0 002.25 6v12a2.25 2.25 0 002.25 2.25h15A2.25 2.25 0 0021.75 18V9a2.25 2.25 0 00-2.25-2.25h-5.379a1.5 1.5 0 01-1.06-.44z" />
              </svg>
              Projects
            </a>
  
            <a href="#" class="flex items-center px-2 py-2 text-sm font-medium text-gray-300 rounded-md hover:bg-gray-700 hover:text-white group">
              <!-- Heroicon name: outline/calendar -->
              <svg class="flex-shrink-0 w-6 h-6 mr-3 text-gray-400 group-hover:text-gray-300" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" aria-hidden="true">
                <path stroke-linecap="round" stroke-linejoin="round" d="M6.75 3v2.25M17.25 3v2.25M3 18.75V7.5a2.25 2.25 0 012.25-2.25h13.5A2.25 2.25 0 0121 7.5v11.25m-18 0A2.25 2.25 0 005.25 21h13.5A2.25 2.25 0 0021 18.75m-18 0v-7.5A2.25 2.25 0 015.25 9h13.5A2.25 2.25 0 0121 11.25v7.5" />
              </svg>
              Calendar
            </a>
  
            <a href="#" class="flex items-center px-2 py-2 text-sm font-medium text-gray-300 rounded-md hover:bg-gray-700 hover:text-white group">
              <!-- Heroicon name: outline/inbox -->
              <svg class="flex-shrink-0 w-6 h-6 mr-3 text-gray-400 group-hover:text-gray-300" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" aria-hidden="true">
                <path stroke-linecap="round" stroke-linejoin="round" d="M2.25 13.5h3.86a2.25 2.25 0 012.012 1.244l.256.512a2.25 2.25 0 002.013 1.244h3.218a2.25 2.25 0 002.013-1.244l.256-.512a2.25 2.25 0 012.013-1.244h3.859m-19.5.338V18a2.25 2.25 0 002.25 2.25h15A2.25 2.25 0 0021.75 18v-4.162c0-.224-.034-.447-.1-.661L19.24 5.338a2.25 2.25 0 00-2.15-1.588H6.911a2.25 2.25 0 00-2.15 1.588L2.35 13.177a2.25 2.25 0 00-.1.661z" />
              </svg>
              Documents
            </a>
  
            <a href="#" class="flex items-center px-2 py-2 text-sm font-medium text-gray-300 rounded-md hover:bg-gray-700 hover:text-white group">
              <!-- Heroicon name: outline/chart-bar -->
              <svg class="flex-shrink-0 w-6 h-6 mr-3 text-gray-400 group-hover:text-gray-300" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" aria-hidden="true">
                <path stroke-linecap="round" stroke-linejoin="round" d="M3 13.125C3 12.504 3.504 12 4.125 12h2.25c.621 0 1.125.504 1.125 1.125v6.75C7.5 20.496 6.996 21 6.375 21h-2.25A1.125 1.125 0 013 19.875v-6.75zM9.75 8.625c0-.621.504-1.125 1.125-1.125h2.25c.621 0 1.125.504 1.125 1.125v11.25c0 .621-.504 1.125-1.125 1.125h-2.25a1.125 1.125 0 01-1.125-1.125V8.625zM16.5 4.125c0-.621.504-1.125 1.125-1.125h2.25C20.496 3 21 3.504 21 4.125v15.75c0 .621-.504 1.125-1.125 1.125h-2.25a1.125 1.125 0 01-1.125-1.125V4.125z" />
              </svg>
              Reports
            </a>
          </nav>
        </div>
      </div>
    </div>

    <div x-data="{ mobileMenuOpen: false }" class="flex flex-col md:pl-64">
      <div class="sticky top-0 z-10 flex flex-shrink-0 h-16 transition-all bg-white shadow dark:bg-gray-900">
        <button x-on:click="mobileMenuOpen = !mobileMenuOpen" type="button" class="px-4 text-gray-500 border-r border-gray-200 transition-all dark:border-gray-800 focus:outline-none focus:ring-2 focus:ring-inset focus:ring-indigo-500 md:hidden">
          <span class="sr-only">Open sidebar</span>
          <!-- Heroicon name: outline/bars-3-bottom-left -->
          <svg class="w-6 h-6" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" aria-hidden="true">
            <path stroke-linecap="round" stroke-linejoin="round" d="M3.75 6.75h16.5M3.75 12h16.5m-16.5 5.25H12" />
          </svg>
        </button>
        <div class="flex justify-between flex-1 px-4">
          <div class="flex flex-1"></div>
          <div class="flex items-center ml-4 md:ml-6">
            <button type="button" class="p-1 text-gray-400 transition-all bg-white rounded-full dark:bg-gray-900 hover:text-gray-500 focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:ring-offset-2">
              <span class="sr-only">View notifications</span>
              <!-- Heroicon name: outline/bell -->
              <svg class="w-6 h-6" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" aria-hidden="true">
                <path stroke-linecap="round" stroke-linejoin="round" d="M14.857 17.082a23.848 23.848 0 005.454-1.31A8.967 8.967 0 0118 9.75v-.7V9A6 6 0 006 9v.75a8.967 8.967 0 01-2.312 6.022c1.733.64 3.56 1.085 5.455 1.31m5.714 0a24.255 24.255 0 01-5.714 0m5.714 0a3 3 0 11-5.714 0" />
              </svg>
            </button>
            <!-- Dark-Mode switch button -->
            <button id="darkmode-toggle" type="button" class="p-1 text-gray-400 transition-all bg-white rounded-full dark:bg-gray-900 hover:text-gray-500 focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:ring-offset-2">
              <span class="dark:hidden">
                <svg viewBox="0 0 24 24" fill="none" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="w-6 h-6">
                  <path d="M15 12a3 3 0 1 1-6 0 3 3 0 0 1 6 0Z" class="fill-sky-400/20 stroke-sky-500"></path>
                  <path d="M12 4v1M17.66 6.344l-.828.828M20.005 12.004h-1M17.66 17.664l-.828-.828M12 20.01V19M6.34 17.664l.835-.836M3.995 12.004h1.01M6 6l.835.836" class="stroke-sky-500"></path>
                </svg>
              </span>
              <span class="hidden dark:inline">
                <svg viewBox="0 0 24 24" fill="none" class="w-6 h-6">
                  <path fill-rule="evenodd" clip-rule="evenodd" d="M17.715 15.15A6.5 6.5 0 0 1 9 6.035C6.106 6.922 4 9.645 4 12.867c0 3.94 3.153 7.136 7.042 7.136 3.101 0 5.734-2.032 6.673-4.853Z" class="fill-sky-400/20"></path>
                  <path d="m17.715 15.15.95.316a1 1 0 0 0-1.445-1.185l.495.869ZM9 6.035l.846.534a1 1 0 0 0-1.14-1.49L9 6.035Zm8.221 8.246a5.47 5.47 0 0 1-2.72.718v2a7.47 7.47 0 0 0 3.71-.98l-.99-1.738Zm-2.72.718A5.5 5.5 0 0 1 9 9.5H7a7.5 7.5 0 0 0 7.5 7.5v-2ZM9 9.5c0-1.079.31-2.082.845-2.93L8.153 5.5A7.47 7.47 0 0 0 7 9.5h2Zm-4 3.368C5 10.089 6.815 7.75 9.292 6.99L8.706 5.08C5.397 6.094 3 9.201 3 12.867h2Zm6.042 6.136C7.718 19.003 5 16.268 5 12.867H3c0 4.48 3.588 8.136 8.042 8.136v-2Zm5.725-4.17c-.81 2.433-3.074 4.17-5.725 4.17v2c3.552 0 6.553-2.327 7.622-5.537l-1.897-.632Z" class="fill-sky-500"></path>
                  <path fill-rule="evenodd" clip-rule="evenodd" d="M17 3a1 1 0 0 1 1 1 2 2 0 0 0 2 2 1 1 0 1 1 0 2 2 2 0 0 0-2 2 1 1 0 1 1-2 0 2 2 0 0 0-2-2 1 1 0 1 1 0-2 2 2 0 0 0 2-2 1 1 0 0 1 1-1Z" class="fill-sky-500"></path>
                </svg>
              </span>
            </button>
  
            <!-- Profile dropdown -->
            <div class="relative ml-3">
              <div>
                <button type="button" class="flex items-center max-w-xs text-sm bg-white rounded-full focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:ring-offset-2" id="user-menu-button" aria-expanded="false" aria-haspopup="true">
                  <span class="sr-only">Open user menu</span>
                  <img class="w-8 h-8 rounded-full" src="https://images.unsplash.com/photo-1472099645785-5658abf4ff4e?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=facearea&facepad=2&w=256&h=256&q=80" alt="">
                </button>
              </div>
  
              <!--
                Dropdown menu, show/hide based on menu state.
  
                Entering: "transition ease-out duration-100"
                  From: "transform opacity-0 scale-95"
                  To: "transform opacity-100 scale-100"
                Leaving: "transition ease-in duration-75"
                  From: "transform opacity-100 scale-100"
                  To: "transform opacity-0 scale-95"
              -->
              <!--<div class="absolute right-0 z-10 w-48 py-1 mt-2 origin-top-right bg-white rounded-md shadow-lg ring-1 ring-black ring-opacity-5 focus:outline-none" role="menu" aria-orientation="vertical" aria-labelledby="user-menu-button" tabindex="-1">
                <!-- Active: "bg-gray-100", Not Active: "" -->
              <!--  <a href="#" class="block px-4 py-2 text-sm text-gray-700" role="menuitem" tabindex="-1" id="user-menu-item-0">Your Profile</a>
  
                <a href="#" class="block px-4 py-2 text-sm text-gray-700" role="menuitem" tabindex="-1" id="user-menu-item-1">Settings</a>
  
                <a href="#" class="block px-4 py-2 text-sm text-gray-700" role="menuitem" tabindex="-1" id="user-menu-item-2">Sign out</a>
              </div>-->
            </div>
          </div>
        </div>
      </div>

      <!-- Off-canvas menu for mobile, show/hide based on off-canvas menu state. -->
      <div class="relative z-40 md:hidden" role="dialog" aria-modal="true">
        <!--
          Off-canvas menu backdrop, show/hide based on off-canvas menu state.

          Entering: "transition-opacity ease-linear duration-300"
            From: "opacity-0"
            To: "opacity-100"
          Leaving: "transition-opacity ease-linear duration-300"
            From: "opacity-100"
            To: "opacity-0"
        -->
        <div :class="{ 'hidden': !mobileMenuOpen }" class="fixed inset-0 top-16 bg-gray-600 bg-opacity-75"></div>

        <div :class="{ 'hidden': !mobileMenuOpen }" class="fixed inset-0 top-16 z-40 flex">
          <!--
            Off-canvas menu, show/hide based on off-canvas menu state.

            Entering: "transition ease-in-out duration-300 transform"
              From: "-translate-x-full"
              To: "translate-x-0"
            Leaving: "transition ease-in-out duration-300 transform"
              From: "translate-x-0"
              To: "-translate-x-full"
          -->
          <div class="relative flex flex-col flex-1 w-full max-w-xs pt-0 pb-4 bg-gray-100 border-gray-200 transition-all dark:bg-gray-800 border-t dark:border-gray-800">
            <div class="flex-1 h-0 mt-5 overflow-y-auto">
              <nav class="px-2 space-y-1">
                <!-- Current: "bg-gray-900 text-white", Default: "text-gray-300 hover:bg-gray-700 hover:text-white" -->
                <a href="#" class="flex items-center px-2 py-2 text-base font-medium text-black dark:text-white bg-gray-200 dark:bg-gray-900 transition-all rounded-md group">
                  <!--
                    Heroicon name: outline/home

                    Current: "text-gray-300", Default: "text-gray-400 group-hover:text-gray-300"
                  -->
                  <svg class="flex-shrink-0 w-6 h-6 mr-4 text-black transition-all dark:text-gray-300" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" aria-hidden="true">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M2.25 12l8.954-8.955c.44-.439 1.152-.439 1.591 0L21.75 12M4.5 9.75v10.125c0 .621.504 1.125 1.125 1.125H9.75v-4.875c0-.621.504-1.125 1.125-1.125h2.25c.621 0 1.125.504 1.125 1.125V21h4.125c.621 0 1.125-.504 1.125-1.125V9.75M8.25 21h8.25" />
                  </svg>
                  Dashboard
                </a>

                <a href="#" class="flex items-center px-2 py-2 text-base font-medium text-black dark:text-white transition-all rounded-md hover:bg-gray-100 hover:text-black dark:hover:bg-gray-700 dark:hover:text-white group">
                  <!-- Heroicon name: outline/users -->
                  <svg class="flex-shrink-0 w-6 h-6 mr-4 text-black transition-all dark:text-gray-400 dark:group-hover:text-gray-300" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" aria-hidden="true">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M15 19.128a9.38 9.38 0 002.625.372 9.337 9.337 0 004.121-.952 4.125 4.125 0 00-7.533-2.493M15 19.128v-.003c0-1.113-.285-2.16-.786-3.07M15 19.128v.106A12.318 12.318 0 018.624 21c-2.331 0-4.512-.645-6.374-1.766l-.001-.109a6.375 6.375 0 0111.964-3.07M12 6.375a3.375 3.375 0 11-6.75 0 3.375 3.375 0 016.75 0zm8.25 2.25a2.625 2.625 0 11-5.25 0 2.625 2.625 0 015.25 0z" />
                  </svg>
                  Team
                </a>

                <a href="#" class="flex items-center px-2 py-2 text-base font-medium text-black dark:text-white transition-all rounded-md hover:bg-gray-100 hover:text-black dark:hover:bg-gray-700 dark:hover:text-white group">
                  <!-- Heroicon name: outline/folder -->
                  <svg class="flex-shrink-0 w-6 h-6 mr-4 text-black transition-all dark:text-gray-400 dark:group-hover:text-gray-300" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" aria-hidden="true">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M2.25 12.75V12A2.25 2.25 0 014.5 9.75h15A2.25 2.25 0 0121.75 12v.75m-8.69-6.44l-2.12-2.12a1.5 1.5 0 00-1.061-.44H4.5A2.25 2.25 0 002.25 6v12a2.25 2.25 0 002.25 2.25h15A2.25 2.25 0 0021.75 18V9a2.25 2.25 0 00-2.25-2.25h-5.379a1.5 1.5 0 01-1.06-.44z" />
                  </svg>
                  Projects
                </a>

                <a href="#" class="flex items-center px-2 py-2 text-base font-medium text-black dark:text-white transition-all rounded-md hover:bg-gray-100 hover:text-black dark:hover:bg-gray-700 dark:hover:text-white group">
                  <!-- Heroicon name: outline/calendar -->
                  <svg class="flex-shrink-0 w-6 h-6 mr-4 text-black transition-all dark:text-gray-400 dark:group-hover:text-gray-300" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" aria-hidden="true">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M6.75 3v2.25M17.25 3v2.25M3 18.75V7.5a2.25 2.25 0 012.25-2.25h13.5A2.25 2.25 0 0121 7.5v11.25m-18 0A2.25 2.25 0 005.25 21h13.5A2.25 2.25 0 0021 18.75m-18 0v-7.5A2.25 2.25 0 015.25 9h13.5A2.25 2.25 0 0121 11.25v7.5" />
                  </svg>
                  Calendar
                </a>

                <a href="#" class="flex items-center px-2 py-2 text-base font-medium text-black dark:text-white transition-all rounded-md hover:bg-gray-100 hover:text-black dark:hover:bg-gray-700 dark:hover:text-white group">
                  <!-- Heroicon name: outline/inbox -->
                  <svg class="flex-shrink-0 w-6 h-6 mr-4 text-black transition-all dark:text-gray-400 dark:group-hover:text-gray-300" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" aria-hidden="true">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M2.25 13.5h3.86a2.25 2.25 0 012.012 1.244l.256.512a2.25 2.25 0 002.013 1.244h3.218a2.25 2.25 0 002.013-1.244l.256-.512a2.25 2.25 0 012.013-1.244h3.859m-19.5.338V18a2.25 2.25 0 002.25 2.25h15A2.25 2.25 0 0021.75 18v-4.162c0-.224-.034-.447-.1-.661L19.24 5.338a2.25 2.25 0 00-2.15-1.588H6.911a2.25 2.25 0 00-2.15 1.588L2.35 13.177a2.25 2.25 0 00-.1.661z" />
                  </svg>
                  Documents
                </a>

                <a href="#" class="flex items-center px-2 py-2 text-base font-medium text-black dark:text-white transition-all rounded-md hover:bg-gray-100 hover:text-black dark:hover:bg-gray-700 dark:hover:text-white group">
                  <!-- Heroicon name: outline/chart-bar -->
                  <svg class="flex-shrink-0 w-6 h-6 mr-4 text-black transition-all dark:text-gray-400 dark:group-hover:text-gray-300" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" aria-hidden="true">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M3 13.125C3 12.504 3.504 12 4.125 12h2.25c.621 0 1.125.504 1.125 1.125v6.75C7.5 20.496 6.996 21 6.375 21h-2.25A1.125 1.125 0 013 19.875v-6.75zM9.75 8.625c0-.621.504-1.125 1.125-1.125h2.25c.621 0 1.125.504 1.125 1.125v11.25c0 .621-.504 1.125-1.125 1.125h-2.25a1.125 1.125 0 01-1.125-1.125V8.625zM16.5 4.125c0-.621.504-1.125 1.125-1.125h2.25C20.496 3 21 3.504 21 4.125v15.75c0 .621-.504 1.125-1.125 1.125h-2.25a1.125 1.125 0 01-1.125-1.125V4.125z" />
                  </svg>
                  Reports
                </a>
              </nav>
            </div>
          </div>
        </div>
      </div>      

      <main class="flex-1">
        <div class="py-6">
          <div class="px-4 mx-auto max-w-7xl sm:px-6 md:px-8">
            <h1 class="text-2xl font-semibold text-gray-900 transition-all dark:text-gray-100">Dashboard</h1>
          </div>
          <div class="px-4 mx-auto max-w-7xl sm:px-6 md:px-8">
            <h2 class="text-sm font-medium text-gray-500 transition-all dark:text-gray-400">Pinned Projects</h2>
              <ul role="list" class="grid grid-cols-2 gap-5 mt-3 sm:grid-cols-2 sm:gap-6 lg:grid-cols-5">
                <li class="flex col-span-1 rounded-md shadow-sm">
                  <div class="flex items-center justify-center flex-shrink-0 w-16 text-sm font-medium text-white bg-pink-600 rounded-l-md">GA</div>
                  <div class="flex items-center justify-between flex-1 truncate bg-white border-t border-b border-r border-gray-200 rounded-r-md">
                    <div class="flex-1 px-4 py-2 text-sm truncate">
                      <a href="#" class="font-medium text-gray-900 hover:text-gray-600">Graph API</a>
                      <p class="text-gray-500">16 Members</p>
                    </div>
                  </div>
                </li>

                <li class="flex col-span-1 rounded-md shadow-sm">
                  <div class="flex items-center justify-center flex-shrink-0 w-16 text-sm font-medium text-white bg-purple-600 rounded-l-md">CD</div>
                  <div class="flex items-center justify-between flex-1 truncate bg-white border-t border-b border-r border-gray-200 rounded-r-md">
                    <div class="flex-1 px-4 py-2 text-sm truncate">
                      <a href="#" class="font-medium text-gray-900 hover:text-gray-600">Component Design</a>
                      <p class="text-gray-500">12 Members</p>
                    </div>
                  </div>
                </li>

                <li class="flex col-span-1 rounded-md shadow-sm">
                  <div class="flex items-center justify-center flex-shrink-0 w-16 text-sm font-medium text-white bg-yellow-500 rounded-l-md">T</div>
                  <div class="flex items-center justify-between flex-1 truncate bg-white border-t border-b border-r border-gray-200 rounded-r-md">
                    <div class="flex-1 px-4 py-2 text-sm truncate">
                      <a href="#" class="font-medium text-gray-900 hover:text-gray-600">Templates</a>
                      <p class="text-gray-500">16 Members</p>
                    </div>
                  </div>
                </li>

                <li class="flex col-span-1 rounded-md shadow-sm">
                  <div class="flex items-center justify-center flex-shrink-0 w-16 text-sm font-medium text-white bg-green-500 rounded-l-md">RC</div>
                  <div class="flex items-center justify-between flex-1 truncate bg-white border-t border-b border-r border-gray-200 rounded-r-md">
                    <div class="flex-1 px-4 py-2 text-sm truncate">
                      <a href="#" class="font-medium text-gray-900 hover:text-gray-600">React Components</a>
                      <p class="text-gray-500">8 Members</p>
                    </div>
                  </div>
                </li>

                <li class="flex col-span-1 rounded-md shadow-sm">
                  <div class="flex items-center justify-center flex-shrink-0 w-16 text-sm font-medium text-white bg-pink-600 rounded-l-md">GA</div>
                  <div class="flex items-center justify-between flex-1 truncate bg-white border-t border-b border-r border-gray-200 rounded-r-md">
                    <div class="flex-1 px-4 py-2 text-sm truncate">
                      <a href="#" class="font-medium text-gray-900 hover:text-gray-600">Graph API</a>
                      <p class="text-gray-500">16 Members</p>
                    </div>
                  </div>
                </li>

                <li class="flex col-span-1 rounded-md shadow-sm">
                  <div class="flex items-center justify-center flex-shrink-0 w-16 text-sm font-medium text-white bg-pink-600 rounded-l-md">GA</div>
                  <div class="flex items-center justify-between flex-1 truncate bg-white border-t border-b border-r border-gray-200 rounded-r-md">
                    <div class="flex-1 px-4 py-2 text-sm truncate">
                      <a href="#" class="font-medium text-gray-900 hover:text-gray-600">Graph API</a>
                      <p class="text-gray-500">16 Members</p>
                    </div>
                  </div>
                </li>

                <li class="flex col-span-1 rounded-md shadow-sm">
                  <div class="flex items-center justify-center flex-shrink-0 w-16 text-sm font-medium text-white bg-purple-600 rounded-l-md">CD</div>
                  <div class="flex items-center justify-between flex-1 truncate bg-white border-t border-b border-r border-gray-200 rounded-r-md">
                    <div class="flex-1 px-4 py-2 text-sm truncate">
                      <a href="#" class="font-medium text-gray-900 hover:text-gray-600">Component Design</a>
                      <p class="text-gray-500">12 Members</p>
                    </div>
                  </div>
                </li>

                <li class="flex col-span-1 rounded-md shadow-sm">
                  <div class="flex items-center justify-center flex-shrink-0 w-16 text-sm font-medium text-white bg-yellow-500 rounded-l-md">T</div>
                  <div class="flex items-center justify-between flex-1 truncate bg-white border-t border-b border-r border-gray-200 rounded-r-md">
                    <div class="flex-1 px-4 py-2 text-sm truncate">
                      <a href="#" class="font-medium text-gray-900 hover:text-gray-600">Templates</a>
                      <p class="text-gray-500">16 Members</p>
                    </div>
                  </div>
                </li>

                <li class="flex col-span-1 rounded-md shadow-sm">
                  <div class="flex items-center justify-center flex-shrink-0 w-16 text-sm font-medium text-white bg-green-500 rounded-l-md">RC</div>
                  <div class="flex items-center justify-between flex-1 truncate bg-white border-t border-b border-r border-gray-200 rounded-r-md">
                    <div class="flex-1 px-4 py-2 text-sm truncate">
                      <a href="#" class="font-medium text-gray-900 hover:text-gray-600">React Components</a>
                      <p class="text-gray-500">8 Members</p>
                    </div>
                  </div>
                </li>

                <li class="flex col-span-1 rounded-md shadow-sm">
                  <div class="flex items-center justify-center flex-shrink-0 w-16 text-sm font-medium text-white bg-pink-600 rounded-l-md">GA</div>
                  <div class="flex items-center justify-between flex-1 truncate bg-white border-t border-b border-r border-gray-200 rounded-r-md">
                    <div class="flex-1 px-4 py-2 text-sm truncate">
                      <a href="#" class="font-medium text-gray-900 hover:text-gray-600">Graph API</a>
                      <p class="text-gray-500">16 Members</p>
                    </div>
                  </div>
                </li>

                <li class="flex col-span-1 rounded-md shadow-sm">
                  <div class="flex items-center justify-center flex-shrink-0 w-16 text-sm font-medium text-white bg-pink-600 rounded-l-md">GA</div>
                  <div class="flex items-center justify-between flex-1 truncate bg-white border-t border-b border-r border-gray-200 rounded-r-md">
                    <div class="flex-1 px-4 py-2 text-sm truncate">
                      <a href="#" class="font-medium text-gray-900 hover:text-gray-600">Graph API</a>
                      <p class="text-gray-500">16 Members</p>
                    </div>
                  </div>
                </li>

                <li class="flex col-span-1 rounded-md shadow-sm">
                  <div class="flex items-center justify-center flex-shrink-0 w-16 text-sm font-medium text-white bg-purple-600 rounded-l-md">CD</div>
                  <div class="flex items-center justify-between flex-1 truncate bg-white border-t border-b border-r border-gray-200 rounded-r-md">
                    <div class="flex-1 px-4 py-2 text-sm truncate">
                      <a href="#" class="font-medium text-gray-900 hover:text-gray-600">Component Design</a>
                      <p class="text-gray-500">12 Members</p>
                    </div>
                  </div>
                </li>

                <li class="flex col-span-1 rounded-md shadow-sm">
                  <div class="flex items-center justify-center flex-shrink-0 w-16 text-sm font-medium text-white bg-yellow-500 rounded-l-md">T</div>
                  <div class="flex items-center justify-between flex-1 truncate bg-white border-t border-b border-r border-gray-200 rounded-r-md">
                    <div class="flex-1 px-4 py-2 text-sm truncate">
                      <a href="#" class="font-medium text-gray-900 hover:text-gray-600">Templates</a>
                      <p class="text-gray-500">16 Members</p>
                    </div>
                  </div>
                </li>

                <li class="flex col-span-1 rounded-md shadow-sm">
                  <div class="flex items-center justify-center flex-shrink-0 w-16 text-sm font-medium text-white bg-green-500 rounded-l-md">RC</div>
                  <div class="flex items-center justify-between flex-1 truncate bg-white border-t border-b border-r border-gray-200 rounded-r-md">
                    <div class="flex-1 px-4 py-2 text-sm truncate">
                      <a href="#" class="font-medium text-gray-900 hover:text-gray-600">React Components</a>
                      <p class="text-gray-500">8 Members</p>
                    </div>
                  </div>
                </li>

                <li class="flex col-span-1 rounded-md shadow-sm">
                  <div class="flex items-center justify-center flex-shrink-0 w-16 text-sm font-medium text-white bg-pink-600 rounded-l-md">GA</div>
                  <div class="flex items-center justify-between flex-1 truncate bg-white border-t border-b border-r border-gray-200 rounded-r-md">
                    <div class="flex-1 px-4 py-2 text-sm truncate">
                      <a href="#" class="font-medium text-gray-900 hover:text-gray-600">Graph API</a>
                      <p class="text-gray-500">16 Members</p>
                    </div>
                  </div>
                </li>

                <li class="flex col-span-1 rounded-md shadow-sm">
                  <div class="flex items-center justify-center flex-shrink-0 w-16 text-sm font-medium text-white bg-pink-600 rounded-l-md">GA</div>
                  <div class="flex items-center justify-between flex-1 truncate bg-white border-t border-b border-r border-gray-200 rounded-r-md">
                    <div class="flex-1 px-4 py-2 text-sm truncate">
                      <a href="#" class="font-medium text-gray-900 hover:text-gray-600">Graph API</a>
                      <p class="text-gray-500">16 Members</p>
                    </div>
                  </div>
                </li>

                <li class="flex col-span-1 rounded-md shadow-sm">
                  <div class="flex items-center justify-center flex-shrink-0 w-16 text-sm font-medium text-white bg-purple-600 rounded-l-md">CD</div>
                  <div class="flex items-center justify-between flex-1 truncate bg-white border-t border-b border-r border-gray-200 rounded-r-md">
                    <div class="flex-1 px-4 py-2 text-sm truncate">
                      <a href="#" class="font-medium text-gray-900 hover:text-gray-600">Component Design</a>
                      <p class="text-gray-500">12 Members</p>
                    </div>
                  </div>
                </li>

                <li class="flex col-span-1 rounded-md shadow-sm">
                  <div class="flex items-center justify-center flex-shrink-0 w-16 text-sm font-medium text-white bg-yellow-500 rounded-l-md">T</div>
                  <div class="flex items-center justify-between flex-1 truncate bg-white border-t border-b border-r border-gray-200 rounded-r-md">
                    <div class="flex-1 px-4 py-2 text-sm truncate">
                      <a href="#" class="font-medium text-gray-900 hover:text-gray-600">Templates</a>
                      <p class="text-gray-500">16 Members</p>
                    </div>
                  </div>
                </li>

                <li class="flex col-span-1 rounded-md shadow-sm">
                  <div class="flex items-center justify-center flex-shrink-0 w-16 text-sm font-medium text-white bg-green-500 rounded-l-md">RC</div>
                  <div class="flex items-center justify-between flex-1 truncate bg-white border-t border-b border-r border-gray-200 rounded-r-md">
                    <div class="flex-1 px-4 py-2 text-sm truncate">
                      <a href="#" class="font-medium text-gray-900 hover:text-gray-600">React Components</a>
                      <p class="text-gray-500">8 Members</p>
                    </div>
                  </div>
                </li>

                <li class="flex col-span-1 rounded-md shadow-sm">
                  <div class="flex items-center justify-center flex-shrink-0 w-16 text-sm font-medium text-white bg-pink-600 rounded-l-md">GA</div>
                  <div class="flex items-center justify-between flex-1 truncate bg-white border-t border-b border-r border-gray-200 rounded-r-md">
                    <div class="flex-1 px-4 py-2 text-sm truncate">
                      <a href="#" class="font-medium text-gray-900 hover:text-gray-600">Graph API</a>
                      <p class="text-gray-500">16 Members</p>
                    </div>
                  </div>
                </li>

                <li class="flex col-span-1 rounded-md shadow-sm">
                  <div class="flex items-center justify-center flex-shrink-0 w-16 text-sm font-medium text-white bg-pink-600 rounded-l-md">GA</div>
                  <div class="flex items-center justify-between flex-1 truncate bg-white border-t border-b border-r border-gray-200 rounded-r-md">
                    <div class="flex-1 px-4 py-2 text-sm truncate">
                      <a href="#" class="font-medium text-gray-900 hover:text-gray-600">Graph API</a>
                      <p class="text-gray-500">16 Members</p>
                    </div>
                  </div>
                </li>

                <li class="flex col-span-1 rounded-md shadow-sm">
                  <div class="flex items-center justify-center flex-shrink-0 w-16 text-sm font-medium text-white bg-purple-600 rounded-l-md">CD</div>
                  <div class="flex items-center justify-between flex-1 truncate bg-white border-t border-b border-r border-gray-200 rounded-r-md">
                    <div class="flex-1 px-4 py-2 text-sm truncate">
                      <a href="#" class="font-medium text-gray-900 hover:text-gray-600">Component Design</a>
                      <p class="text-gray-500">12 Members</p>
                    </div>
                  </div>
                </li>

                <li class="flex col-span-1 rounded-md shadow-sm">
                  <div class="flex items-center justify-center flex-shrink-0 w-16 text-sm font-medium text-white bg-yellow-500 rounded-l-md">T</div>
                  <div class="flex items-center justify-between flex-1 truncate bg-white border-t border-b border-r border-gray-200 rounded-r-md">
                    <div class="flex-1 px-4 py-2 text-sm truncate">
                      <a href="#" class="font-medium text-gray-900 hover:text-gray-600">Templates</a>
                      <p class="text-gray-500">16 Members</p>
                    </div>
                  </div>
                </li>

                <li class="flex col-span-1 rounded-md shadow-sm">
                  <div class="flex items-center justify-center flex-shrink-0 w-16 text-sm font-medium text-white bg-green-500 rounded-l-md">RC</div>
                  <div class="flex items-center justify-between flex-1 truncate bg-white border-t border-b border-r border-gray-200 rounded-r-md">
                    <div class="flex-1 px-4 py-2 text-sm truncate">
                      <a href="#" class="font-medium text-gray-900 hover:text-gray-600">React Components</a>
                      <p class="text-gray-500">8 Members</p>
                    </div>
                  </div>
                </li>

                <li class="flex col-span-1 rounded-md shadow-sm">
                  <div class="flex items-center justify-center flex-shrink-0 w-16 text-sm font-medium text-white bg-pink-600 rounded-l-md">GA</div>
                  <div class="flex items-center justify-between flex-1 truncate bg-white border-t border-b border-r border-gray-200 rounded-r-md">
                    <div class="flex-1 px-4 py-2 text-sm truncate">
                      <a href="#" class="font-medium text-gray-900 hover:text-gray-600">Graph API</a>
                      <p class="text-gray-500">16 Members</p>
                    </div>
                  </div>
                </li>
              </ul>
          </div>
        </div>
      </main>
    </div>
  </div>
@endsection
