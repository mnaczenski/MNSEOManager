Ext.define('Shopware.apps.SwagSEOManager.view.detail.seo', {
    extend: 'Shopware.model.Container',
    alias: 'widget.detail-detail-container',
    padding: 20,

    configure: function() {
        return {
            controller: 'SwagSEOManager',
            fieldSets: [{
                title: 'URL Mapping',
                layout: 'fit',
                fields: {
                    org_path: 'Technische URL',
                    path: 'SEO-URL'
                }
            }, {
                title: 'Konfiguration',
                fields: {
                    main: 'Aktiv',
                    subshopID: 'SubshopID',
                }
            }]
        };
    },
    fields: [
        { name : 'id', type: 'int'},
        { name : 'org_path', type: 'string' },
        { name : 'path', type: 'string' },
        { name : 'main', type: 'boolean' },
        { name : 'subshopID', type: 'integer' }
    ]
});