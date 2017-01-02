Ext.define('Shopware.apps.SwagSEOManager.model.seo', {
    extend: 'Shopware.data.Model',

    configure: function() {
        return {
            controller: 'SwagSEOManager',
            detail: 'Shopware.apps.SwagSEOManager.view.detail.seo'
        };
    },

    fields: [
        { name : 'id', type: 'int', useNull: true },
        { name : 'org_path', type: 'string' },
        { name : 'path', type: 'string' },
        { name : 'main', type: 'boolean'},
        { name : 'subshopID', type: 'integer' }
    ]
});