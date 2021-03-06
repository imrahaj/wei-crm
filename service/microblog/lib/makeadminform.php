<?php
// @todo FIXME: add standard file header.

/**
 * Form for making a user an admin for a group
 *
 * @category Form
 * @package  MicroService
 * @author   gaoyuan tan <gaoyuantan@163.com>
 * @author   gaoyuan tan <gaoyuantan@163.com>
 * @license  http://www.fsf.org/licensing/licenses/agpl-3.0.html GNU Affero General Public License version 3.0
 * @link     http://www.microservice.com
 */
class MakeAdminForm extends Form
{
    /**
     * Profile of user to block
     */
    var $profile = null;

    /**
     * Group to block the user from
     */
    var $group = null;

    /**
     * Return-to args
     */
    var $args = null;

    /**
     * Constructor
     *
     * @param HTMLOutputter $out     output channel
     * @param Profile       $profile profile of user to block
     * @param User_group    $group   group to block user from
     * @param array         $args    return-to args
     */
    function __construct($out=null, $profile=null, $group=null, $args=null)
    {
        parent::__construct($out);

        $this->profile = $profile;
        $this->group   = $group;
        $this->args    = $args;
    }

    /**
     * ID of the form
     *
     * @return int ID of the form
     */
    function id()
    {
        // This should be unique for the page.
        return 'makeadmin-' . $this->profile->id;
    }

    /**
     * class of the form
     *
     * @return string class of the form
     */
    function formClass()
    {
        return 'form_make_admin';
    }

    /**
     * Action of the form
     *
     * @return string URL of the action
     */
    function action()
    {
        return common_local_url('makeadmin', array('nickname' => $this->group->nickname));
    }

    /**
     * Legend of the Form
     *
     * @return void
     */
    function formLegend()
    {
        // TRANS: Form legend for form to make a user a group admin.
        $this->out->element('legend', null, _('Make user an admin of the group'));
    }

    /**
     * Data elements of the form
     *
     * @return void
     */
    function formData()
    {
        $this->out->hidden('profileid-' . $this->profile->id,
                           $this->profile->id,
                           'profileid');
        $this->out->hidden('groupid-' . $this->group->id,
                           $this->group->id,
                           'groupid');
        if ($this->args) {
            foreach ($this->args as $k => $v) {
                $this->out->hidden('returnto-' . $k, $v);
            }
        }
    }

    /**
     * Action elements
     *
     * @return void
     */
    function formActions()
    {
        $this->out->submit(
          'submit',
          // TRANS: Button text for the form that will make a user administrator.
          _m('BUTTON','Make Admin'),
          'submit',
          null,
          // TRANS: Submit button title.
          _m('TOOLTIP','Make this user an admin.'));
    }
}
