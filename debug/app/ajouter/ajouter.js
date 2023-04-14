import Mount from '../../../.kernel/js/io/mount.js';
import Attribute from '../../../.kernel/js/html/attribute.js';
import Dom from '../../../.kernel/js/html/dom.js';
import Finder from '../../../.kernel/js/html/finder.js';
import Rest from '../../../.kernel/js/communication/rest.js';
import Location from '../../../.kernel/js/url/location.js';



/**
 * Script du composant Ajouter.
 * 
 * @author chris
 * @version 1.0
 * @category Component script
 */
export default class Ajouter extends Mount {

    /**
     * Point d'entrée du script.
     * 
     * @access public
     * @param {string} uuid Le UUID du composant.
     * @return {void}
     */
    constructor(uuid) {
        super(uuid);
    }

}