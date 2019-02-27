const e = React.createElement;


class Filebrowser extends React.Component {
    render() {
        return (
            'Stuff Works'
        )
    }
}

const domContainer = document.querySelector('#filebrowserContainer');
ReactDOM.render(e(Filebrowser), domContainer);
