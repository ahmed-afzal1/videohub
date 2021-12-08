using System;
using System.Collections;
using System.Collections.Generic;
using System.Text;
namespace Geniusoc_videopro
{
    #region Pagesettings
    public class Pagesettings
    {
        #region Member Variables
        protected int _id;
        protected string _success_message;
        protected string _contact_email;
        protected string _website;
        protected string _day;
        protected string _time;
        protected string _street_address;
        protected int _contact_number;
        protected string _fax;
        protected string _meta_key;
        protected string _meta_description;
        #endregion
        #region Constructors
        public Pagesettings() { }
        public Pagesettings(string success_message, string contact_email, string website, string day, string time, string street_address, int contact_number, string fax, string meta_key, string meta_description)
        {
            this._success_message=success_message;
            this._contact_email=contact_email;
            this._website=website;
            this._day=day;
            this._time=time;
            this._street_address=street_address;
            this._contact_number=contact_number;
            this._fax=fax;
            this._meta_key=meta_key;
            this._meta_description=meta_description;
        }
        #endregion
        #region Public Properties
        public virtual int Id
        {
            get {return _id;}
            set {_id=value;}
        }
        public virtual string Success_message
        {
            get {return _success_message;}
            set {_success_message=value;}
        }
        public virtual string Contact_email
        {
            get {return _contact_email;}
            set {_contact_email=value;}
        }
        public virtual string Website
        {
            get {return _website;}
            set {_website=value;}
        }
        public virtual string Day
        {
            get {return _day;}
            set {_day=value;}
        }
        public virtual string Time
        {
            get {return _time;}
            set {_time=value;}
        }
        public virtual string Street_address
        {
            get {return _street_address;}
            set {_street_address=value;}
        }
        public virtual int Contact_number
        {
            get {return _contact_number;}
            set {_contact_number=value;}
        }
        public virtual string Fax
        {
            get {return _fax;}
            set {_fax=value;}
        }
        public virtual string Meta_key
        {
            get {return _meta_key;}
            set {_meta_key=value;}
        }
        public virtual string Meta_description
        {
            get {return _meta_description;}
            set {_meta_description=value;}
        }
        #endregion
    }
    #endregion
}