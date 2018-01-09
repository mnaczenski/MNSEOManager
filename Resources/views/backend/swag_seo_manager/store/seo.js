Ext.define('Shopware.apps.SwagSEOManager.store.seo', {
    extend:'Shopware.store.Listing',

    configure: function() {
        return {
            controller: 'SwagSEOManager'
        };
    },
    model: 'Shopware.apps.SwagSEOManager.model.seo'
});