Ext.define('Shopware.apps.SwagSEOManager', {
    extend: 'Enlight.app.SubApplication',

    name:'Shopware.apps.SwagSEOManager',

    loadPath: '{url action=load}',
    bulkLoad: true,

    controllers: [ 'Main' ],

    views: [
        'list.Window',
        'list.seo',
        'detail.Window',
        'detail.seo'
    ],

    models: [ 'seo' ],
    stores: [ 'seo' ],

    launch: function() {
        return this.getController('Main').mainWindow;
    }
});