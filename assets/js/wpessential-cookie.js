class WpessentialCookie {
    set ( name, value, exdays, path ) {
        if ( ! exdays ) {
            exdays = 2;
        }

        if ( ! path ) {
            path = '/';
        }

        var d = new Date();
        d.setTime( d.getTime() + (exdays * 24 * 60 * 60 * 1000) );
        var expires = "expires=" + d.toUTCString();

        document.cookie = name + "=" + value + ";" + expires + ";path=" + path;
    }

    get ( name ) {
        var cookieValue = '';
        var split = document.cookie.split( '; ' );
        if ( split ) {

            var found = _.find( split, function ( row ) {
                return row.startsWith( name );
            } );
            if ( found ) {
                cookieValue = found.split( '=' )[ 1 ];
            }

        }

        return cookieValue;
    }

    remove ( name ) {
        document.cookie = name + "=;";
    }
}
